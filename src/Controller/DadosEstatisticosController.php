<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DadosEstatisticos Controller
 *
 * @property \App\Model\Table\DadosEstatisticosTable $DadosEstatisticos
 *
 * @method \App\Model\Entity\DadosEstatistico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DadosEstatisticosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $dadosEstatisticos = $this->paginate($this->DadosEstatisticos);

        $this->set(compact('dadosEstatisticos'));
    }

    /**
     * View method
     *
     * @param string|null $id Dados Estatistico id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dadosEstatistico = $this->DadosEstatisticos->get($id, [
            'contain' => [],
        ]);

        $this->set('dadosEstatistico', $dadosEstatistico);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dadosEstatistico = $this->DadosEstatisticos->newEmptyEntity();
        if ($this->request->is('post')) {
            $dadosEstatistico = $this->DadosEstatisticos->patchEntity($dadosEstatistico, $this->request->getData());
            if ($this->DadosEstatisticos->save($dadosEstatistico)) {
                $this->Flash->success(__('Dado estatistico salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O dado estatistico não pode ser salvo. Por favor, tente novamente'));
        }
        $this->set(compact('dadosEstatistico'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dados Estatistico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dadosEstatistico = $this->DadosEstatisticos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dadosEstatistico = $this->DadosEstatisticos->patchEntity($dadosEstatistico, $this->request->getData());
            if ($this->DadosEstatisticos->save($dadosEstatistico)) {
                $this->Flash->success(__('Dado estatistico atualizado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O dado estatistico não pode ser atualizado. Por favor, tente novamente.'));
        }
        $this->set(compact('dadosEstatistico'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dados Estatistico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dadosEstatistico = $this->DadosEstatisticos->get($id);
        if ($this->DadosEstatisticos->delete($dadosEstatistico)) {
            $this->Flash->success(__('O Dado estatistico foi deletado.'));
        } else {
            $this->Flash->error(__('O Dado estatistico não pode ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
