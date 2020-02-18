<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 *
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $usuarios = $this->paginate($this->Usuarios);

        $this->set(compact('usuarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => [],
        ]);

        $this->set('usuario', $usuario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuario = $this->Usuarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('Usuario salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O usuário não pode ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('usuario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => [],
        ]);

        // Zera senha quando método "edit" é chamado
        //assim, campo senha do formulário fica em branco
        $usuario->unsetProperty('senha');

        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('Usuário atualizado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O usuário não pode ser atualizado. Por favor, tente novamente.'));
        }
        $this->set(compact('usuario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('O usuário foi deletado'));
        } else {
            $this->Flash->error(__('O usuário não pode ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        //Recupera a sessao
        //Se já existir, redireciona para o /admin
        $session = $this->getRequest()->getSession();
        if ($session->check("Auth")) {
            $this->redirect('/admin');
        }

        //Se a requisição vier via POST
        if ($this->request->is('post')){

            // Recupera os dados da requisição
            $dados = $this->request->getData();

            // Monta query para buscar valores
            // $dados['login'] é respectivo ao campo de nome 'login' do Form
            // Tivemos de desencriptar a senha para realizar o Login, senão retorna sempre null
            // Usa o '->first()' para parar no primeiro encontrado apenas
            $usuario = $this->Usuarios->find('all')
                        ->where(['login' => $dados['login']])
                        ->where(['senha' => \Cake\Utility\Security::hash($dados['senha'],'sha256')])
                        ->first();

            if ($usuario){ // Se encontrou usuário
                // Método setUser do componente Auth do Cake salva o usuario logado na sessão
                $this->Auth->setUser($usuario);
                return $this->redirect('/admin');
            } 
            else{ // Senão (Se não encontrou usuário)
                $this->Flash->error(__('E-mail ou senha inválidos! Por favor, tente novamente.'));
            }

        }
    }

    public function logout()
    {
        // Recupera a sessao para destrui-la em seguida
        $session = $this->getRequest()->getSession();
        $session->destroy();
        
        //  Chama o componente Auth do Cake para logout
        return $this->redirect($this->Auth->logout());
    }

    public function admin()
    {
        //ainda nada definido
    }


}
