<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserProfile Controller
 *
 * @property \App\Model\Table\UserProfileTable $UserProfile
 */
class UserProfileController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $userProfile = $this->paginate($this->UserProfile);

        $this->set(compact('userProfile'));
        $this->set('_serialize', ['userProfile']);
    }

    /**
     * View method
     *
     * @param string|null $id User Profile id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userProfile = $this->UserProfile->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userProfile', $userProfile);
        $this->set('_serialize', ['userProfile']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userProfile = $this->UserProfile->newEntity();
        if ($this->request->is('post')) {
            $userProfile = $this->UserProfile->patchEntity($userProfile, $this->request->data);
            if ($this->UserProfile->save($userProfile)) {
                $this->Flash->success(__('The user profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user profile could not be saved. Please, try again.'));
            }
        }
        $users_id = "";
        if(!empty($this->Auth->user('id')))
        	$users_id = $this->Auth->user('id');
        $users = $this->UserProfile->Users->find('list', array('conditions' => array('id' => $users_id)),['limit' => 200]);
        
        $this->set(compact('userProfile', 'users'));
        $this->set('_serialize', ['userProfile']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Profile id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userProfile = $this->UserProfile->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userProfile = $this->UserProfile->patchEntity($userProfile, $this->request->data);
            if ($this->UserProfile->save($userProfile)) {
                $this->Flash->success(__('The user profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user profile could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserProfile->Users->find('list', ['limit' => 200]);
        $this->set(compact('userProfile', 'users'));
        $this->set('_serialize', ['userProfile']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Profile id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userProfile = $this->UserProfile->get($id);
        if ($this->UserProfile->delete($userProfile)) {
            $this->Flash->success(__('The user profile has been deleted.'));
        } else {
            $this->Flash->error(__('The user profile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
}
