<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Interessados Controller
 *
 * @property \App\Model\Table\InteressadosTable $Interessados
 *
 * @method \App\Model\Entity\Interessado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InteressadosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $interessados = $this->paginate($this->Interessados,['limit' => 10]);

        $this->set(compact('interessados'));
    }

    /**
     * View method
     *
     * @param string|null $id Interessado id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $interessado = $this->Interessados->get($id, [
            'contain' => [],
        ]);

        $this->set('interessado', $interessado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $interessado = $this->Interessados->newEmptyEntity();
        if ($this->request->is('post')) {
            $interessado = $this->Interessados->patchEntity($interessado, $this->request->getData());
            if ($this->Interessados->save($interessado)) {

                $this->Flash->success(__('Interessado salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O interessado não pode ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('interessado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Interessado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $interessado = $this->Interessados->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $interessado = $this->Interessados->patchEntity($interessado, $this->request->getData());
            if ($this->Interessados->save($interessado)) {
                $this->Flash->success(__('Interessado atualizado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O interessado não pode ser atualizado. Por favor, tente novamente.'));
        }
        $this->set(compact('interessado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Interessado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $interessado = $this->Interessados->get($id);
        if ($this->Interessados->delete($interessado)) {
            $this->Flash->success(__('O interessado foi deletado.'));
        } else {
            $this->Flash->error(__('O interessado não pode ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
