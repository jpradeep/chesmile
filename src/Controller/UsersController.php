<?php
namespace App\Controller;
use Cake\Mailer\Email;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Routing\Router;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
	
	public function initialize()
	{
	    parent::initialize();
	
	    //$this->Auth->allow(['add','adminlogin']);
	    $this->Auth->allow();
	}
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		
        $this->paginate = [
            'contain' => ['Groups']
        ];
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
            'contain' => ['Groups', 'Aros', 'Posts']
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
    	$activation_key = Text::uuid();
		$this->viewBuilder()->layout('signin');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
        	//$this->request->data['activation_key'] = $activation_key = String::uuid();
        	$this->request->data['activation_key'] = $activation_key;
        	$user = $this->Users->patchEntity($user, $this->request->data);
            
            if ($this->Users->save($user)) {
            	/*
            	$email = new Email();
        		$email->transport('gmail');
        		$email->template('default');
        		$subject = "Account Activation link send on your email";
            	$name = $this->request->data['fullname'];
			    $to = trim($this->request->data['email']);
			    $email->emailFormat('html');
			    $email->from('jpradeep.anna@gmail.com');
			    $email->to('jpradeep.cse@gmail.com');
			    $email->cc('jpradeep.anna@gmail.com');
			    $email->subject($subject);
			    //$activationUrl = $this->redirect(['controller' => 'users', 'action' => 'activate/' . $activation_key]);
				$activationUrl = Router::url(['controller' => 'users', 'action' => 'activate/' . $activation_key ]);

			    // Always try to write clean code, so that you can read it :) :

			    $message = "Dear <span style='color:#666666'>" . $name . "</span>,<br/><br/>";
			    $message .= "Your account has been created successfully by Administrator.<br/>";
            	$message .= "<b>Activate your account by clicking on the below url:</b> <br/>";
			    $message .= "<a href='$activationUrl'>$activationUrl</a><br/><br/>";
			    $message .= "<br/>Thanks, <br/>Support Team";
			    $email->message($message);
			    $email->send();
            	*/
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200,'conditions' => array('role' => 'Users')]);
        $this->set(compact('user', 'groups'));
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
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups'));
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
    
	public function login() {
		$this->viewBuilder()->layout('signin');
	    if ($this->request->is('post')) {
	        $user = $this->Auth->identify();
			if ($user) {
	            $this->Auth->setUser($user);
	            return $this->redirect($this->Auth->redirectUrl());
	        }
	        $this->Flash->error(__('Your username or password was incorrect.'));
	    }
	}
	
	public function adminlogin() {
			
		$this->viewBuilder()->layout('signin');
	    if ($this->request->is('post')) {
	        $user = $this->Auth->identify();
			
	        if ($user) {
	            $this->Auth->setUser($user);
	            return $this->redirect(array('controller' => 'AdminDashBoard',
		        'action' => 'index',));
	        }
	        $this->Flash->error(__('Your username or password was incorrect.'));
	    }
	}
    
	public function logout() {
		$this->Auth->logout();
	    $this->Flash->success(__('Good-Bye'));
	    $this->redirect($this->Auth->logout());
	}

	function activate($activation_key) {
	        $userData = $this->User->find('first', array(
	        'conditions' => array(
	                'User.activation_key' => $activation_key,
	                'User.active' => 0
	        )
	    ));
	    if( !empty($userData)){
	           if ($userData['User']['active'] == 0)
	            {
	                $activeStatus = 1;
	            } 
	    $status = $this->User->updateAll(array('User.status' => $activeStatus), array('User.id' => $id));
	    if ($status)
            {   $this->Session->setFlash(__('Status updated successfully'));

            } else
            {   
            	$this->Session->setFlash(__('Something went wrong, please try again.'));
            }
             $this->redirect(array('controller' => 'Users', 'action' => 'index'));
	
	    }
	}
	
	
}
