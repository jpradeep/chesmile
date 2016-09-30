<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdminDashBoard Controller
 *
 * @property \App\Model\Table\AdminDashBoardTable $AdminDashBoard
 */
class AdminDashBoardController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	$this->viewBuilder()->layout('admin');
        //$adminDashBoard = $this->paginate($this->AdminDashBoard);

        //$this->set(compact('adminDashBoard'));
        //$this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * View method
     *
     * @param string|null $id Admin Dash Board id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminDashBoard = $this->AdminDashBoard->get($id, [
            'contain' => []
        ]);

        $this->set('adminDashBoard', $adminDashBoard);
        $this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminDashBoard = $this->AdminDashBoard->newEntity();
        if ($this->request->is('post')) {
            $adminDashBoard = $this->AdminDashBoard->patchEntity($adminDashBoard, $this->request->data);
            if ($this->AdminDashBoard->save($adminDashBoard)) {
                $this->Flash->success(__('The admin dash board has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The admin dash board could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('adminDashBoard'));
        $this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin Dash Board id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminDashBoard = $this->AdminDashBoard->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminDashBoard = $this->AdminDashBoard->patchEntity($adminDashBoard, $this->request->data);
            if ($this->AdminDashBoard->save($adminDashBoard)) {
                $this->Flash->success(__('The admin dash board has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The admin dash board could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('adminDashBoard'));
        $this->set('_serialize', ['adminDashBoard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin Dash Board id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminDashBoard = $this->AdminDashBoard->get($id);
        if ($this->AdminDashBoard->delete($adminDashBoard)) {
            $this->Flash->success(__('The admin dash board has been deleted.'));
        } else {
            $this->Flash->error(__('The admin dash board could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
