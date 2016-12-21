<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Carefour Controller
 *
 * @property \App\Model\Table\CarefourTable $Carefour
 */
class CarefourController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $carefour = $this->paginate($this->Carefour);

        $this->set(compact('carefour'));
        $this->set('_serialize', ['carefour']);
    }

    /**
     * View method
     *
     * @param string|null $id Carefour id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carefour = $this->Carefour->get($id, [
            'contain' => []
        ]);

        $this->set('carefour', $carefour);
        $this->set('_serialize', ['carefour']);
        
          //if there is no promotion there will be no promotion date 
         if($carefour->promotion === 0){
            $carefour->debut_promotion = null;
            $carefour->fin_promotion = null;
         }
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carefour = $this->Carefour->newEntity();
        if ($this->request->is('post')) {
            $carefour = $this->Carefour->patchEntity($carefour, $this->request->data);
            if ($this->Carefour->save($carefour)) {
                $this->Flash->success(__('Updates has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Updates could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('carefour'));
        $this->set('_serialize', ['carefour']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Carefour id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carefour = $this->Carefour->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carefour = $this->Carefour->patchEntity($carefour, $this->request->data);
            if ($this->Carefour->save($carefour)) {
                $this->Flash->success(__('Updates has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Updates could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('carefour'));
        $this->set('_serialize', ['carefour']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Carefour id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carefour = $this->Carefour->get($id);
        if ($this->Carefour->delete($carefour)) {
            $this->Flash->success(__('It has been deleted.'));
        } else {
            $this->Flash->error(__('It could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
