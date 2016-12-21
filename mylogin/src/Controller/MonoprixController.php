<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Monoprix Controller
 *
 * @property \App\Model\Table\MonoprixTable $Monoprix
 */
class MonoprixController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $monoprix = $this->paginate($this->Monoprix);

        $this->set(compact('monoprix'));
        $this->set('_serialize', ['monoprix']);
    
        //if there is no promotion there will be no promotion date 
       
    }

    /**
     * View method
     *
     * @param string|null $id Monoprix id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $monoprix = $this->Monoprix->get($id, [
            'contain' => []
        ]);

        $this->set('monoprix', $monoprix);
        $this->set('_serialize', ['monoprix']);
        
        //if there is no promotion there will be no promotion date 
         if($monoprix->promotion === 0){
            $monoprix->debut_promotion = null;
            $monoprix->fin_promotion = null;
         }
        
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $monoprix = $this->Monoprix->newEntity();
        if ($this->request->is('post')) {
            $monoprix = $this->Monoprix->patchEntity($monoprix, $this->request->data);
            if ($this->Monoprix->save($monoprix)) {
                $this->Flash->success(__('Updates has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Updates could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('monoprix'));
        $this->set('_serialize', ['monoprix']);
        
    }

    /**
     * Edit method
     *
     * @param string|null $id Monoprix id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $monoprix = $this->Monoprix->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $monoprix = $this->Monoprix->patchEntity($monoprix, $this->request->data);
            if ($this->Monoprix->save($monoprix)) {
                $this->Flash->success(__('Updates has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Updates could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('monoprix'));
        $this->set('_serialize', ['monoprix']);
        
    }

    /**
     * Delete method
     *
     * @param string|null $id Monoprix id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $monoprix = $this->Monoprix->get($id);
        if ($this->Monoprix->delete($monoprix)) {
            $this->Flash->success(__('It has been deleted.'));
        } else {
            $this->Flash->error(__('It could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
