<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aziza Controller
 *
 * @property \App\Model\Table\AzizaTable $Aziza
 */
class AzizaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $aziza = $this->paginate($this->Aziza);

        $this->set(compact('aziza'));
        $this->set('_serialize', ['aziza']);
    }

    /**
     * View method
     *
     * @param string|null $id Aziza id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aziza = $this->Aziza->get($id, [
            'contain' => []
        ]);

        $this->set('aziza', $aziza);
        $this->set('_serialize', ['aziza']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aziza = $this->Aziza->newEntity();
        if ($this->request->is('post')) {
            $aziza = $this->Aziza->patchEntity($aziza, $this->request->data);
            if ($this->Aziza->save($aziza)) {
                $this->Flash->success(__('Updates has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Updates could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aziza'));
        $this->set('_serialize', ['aziza']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aziza id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aziza = $this->Aziza->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aziza = $this->Aziza->patchEntity($aziza, $this->request->data);
            if ($this->Aziza->save($aziza)) {
                $this->Flash->success(__('Updates has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Updates could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aziza'));
        $this->set('_serialize', ['aziza']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aziza id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aziza = $this->Aziza->get($id);
        if ($this->Aziza->delete($aziza)) {
            $this->Flash->success(__('It has been deleted.'));
        } else {
            $this->Flash->error(__('It could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
