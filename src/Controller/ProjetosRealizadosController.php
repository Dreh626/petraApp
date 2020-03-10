<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProjetosRealizados Controller
 *
 * @property \App\Model\Table\ProjetosRealizadosTable $ProjetosRealizados
 *
 * @method \App\Model\Entity\ProjetosRealizado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosRealizadosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $projetosRealizados = $this->paginate($this->ProjetosRealizados);

        $this->set(compact('projetosRealizados'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetos Realizado id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosRealizado = $this->ProjetosRealizados->get($id, [
            'contain' => [],
        ]);

        $this->set('projetosRealizado', $projetosRealizado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosRealizado = $this->ProjetosRealizados->newEmptyEntity();
        if ($this->request->is('post')) {
            $projetosRealizado = $this->ProjetosRealizados->patchEntity($projetosRealizado, $this->request->getData());
        
            // Recupera o arquivo para Upload
            $file = $this->request->getData('foto');

            // Se existir arquivo para Upload
            if(!empty($file)){
                
                // Pega o nome, a extensão e o nome temporário do arquivo
                $file_fullName = strtolower($file->getClientFilename());
                $file_name = explode('.',$file_fullName);
                $file_extension = array_pop($file_name);
                $file_tmpName = $file->getStream()->getMetadata('uri');

                // Recupera cidade para renomear o arquivo
                // Define o caminho onde será "upado" o arquivo
                // Define: "caminho/nome_arquivo.extensão"
                $cidade = strtolower($projetosRealizado->cidade);
                $uploadPath = WWW_ROOT . 'img/projetos/';
                $uploadFile = $uploadPath.$cidade.'.'.$file_extension;

                // Se fizer o Upload, altera o nome do arquivo para "cidade.extensao" e salva os dados
                if (move_uploaded_file($file_tmpName, $uploadFile) ){

                    // Renomeia a foto para "cidade.extensao" e UpperCase na UF
                    $projetosRealizado['foto'] = $cidade.'.'.$file_extension;
                    $projetosRealizado['uf'] = strtoupper($projetosRealizado->uf);

                    // Se dados forem salvos
                    if ($this->ProjetosRealizados->save($projetosRealizado)) {
                        $this->Flash->success(__('O Projeto Realizado foi salvo com sucesso.'));
                        return $this->redirect(['action' => 'index']);
                    }
                    $this->Flash->error(__('O Projeto Realizado não pode ser salvo. Por favor tente novamente.'));

                }else{
                    $this->Flash->error(__('Falha ao mover o Upload!'));
                }

            }else{
                $this->Flash->error(__('Falha ao obter arquivo de Upload!'));
            }

        }
        $this->set(compact('projetosRealizado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetos Realizado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosRealizado = $this->ProjetosRealizados->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosRealizado = $this->ProjetosRealizados->patchEntity($projetosRealizado, $this->request->getData());

            // Recupera o arquivo para Upload
            $file = $this->request->getData('foto');

            // Se existir arquivo para Upload
            if(!empty($file)){

                // Pega o nome, a extensão e o nome temporário do arquivo
                $file_fullName = strtolower($file->getClientFilename());
                $file_name = explode('.',$file_fullName);
                $file_extension = array_pop($file_name);
                $file_tmpName = $file->getStream()->getMetadata('uri');

                // Recupera cidade para renomear o arquivo
                // Define o caminho onde será "upado" o arquivo
                // Define: "caminho/nome_arquivo.extensão"
                $cidade = strtolower($projetosRealizado->cidade);
                $uploadPath = WWW_ROOT . 'img/projetos/';
                $uploadFile = $uploadPath.$cidade.'.'.$file_extension;

                // Se fizer o Upload, altera o nome do arquivo para "cidade.extensao" e salva os dados
                if (move_uploaded_file($file_tmpName, $uploadFile) ){

                    // Renomeia a foto para "cidade.extensao" e UpperCase na UF
                    $projetosRealizado['foto'] = $cidade.'.'.$file_extension;
                    $projetosRealizado['uf'] = strtoupper($projetosRealizado->uf);

                    if ($this->ProjetosRealizados->save($projetosRealizado)) {
                        $this->Flash->success(__('Projeto Realizado atualizado com sucesso.'));
                        return $this->redirect(['action' => 'index']);
                    }
                    $this->Flash->error(__('O Projeto Realizado não pode ser atualizado. Por favor, tente novamente.'));
                
                }else{
                    $this->Flash->error(__('Falha ao mover o Upload!'));
                }

            }else{
                $this->Flash->error(__('Falha ao obter arquivo de Upload!'));
            }

        }
        $this->set(compact('projetosRealizado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetos Realizado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosRealizado = $this->ProjetosRealizados->get($id);
        if ($this->ProjetosRealizados->delete($projetosRealizado)) {
            $this->Flash->success(__('O Projeto Realizado foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('O Projeto Realizado não pode ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
