<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
        
     //user login
    public function login(){
       if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            if($user['role']=='admin'){
            return $this->redirect(['controller' => 'users']);  
                
            }else if(($user['role']=='magasinier')&&($user['name']=='monoprix')){
            return $this->redirect(['controller' => 'monoprix']);
                
            }else if(($user['role']=='magasinier')&&($user['name']=='carefour')){
            return $this->redirect(['controller' => 'carefour']);
                
             }else if(($user['role']=='magasinier')&&($user['name']=='aziza')){
            return $this->redirect(['controller' => 'aziza']);
            
            }else{
                
            $this->Flash->error("You are a simple client you piece of sh*t!");    
            }
        } else {
            //bad login
            $this->Flash->error("Nom d'utilisateur ou mot de passe incorrect");
        }
    }
}
    //user logout
    public function Logout(){
            $this->Flash->success("You are logged out");
        return $this->redirect($this->Auth->logout());
    }

    //redirect to login page after succesfuly registered
    public function Sign(){
        $user = $this->Users->newEntity();
        //the role will be client when you sign in
        $user['role'] = 'client';
        if($this->request->is('post')){
            $user = $this->Users->patchEntity($user, $this->request->data);
            if($this->Users->save($user)){
                $this->Flash->success("You are registered");
                return $this->redirect(['action'=>'login']);
            }else{
                $this->Flash->error("You are not registered TRY AGAIN!"); 
            }
           
        }
    }
    
       //allow access for guests without authentification
    public function beforeFilter(Event $event){
        $this->Auth->allow('sign');
    }
} 