<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AclPhinxlog Controller
 *
 * @property \App\Model\Table\AclPhinxlogTable $AclPhinxlog
 */
class AclPhinxlogController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $aclPhinxlog = $this->paginate($this->AclPhinxlog);

        $this->set(compact('aclPhinxlog'));
        $this->set('_serialize', ['aclPhinxlog']);
    }

    /**
     * View method
     *
     * @param string|null $id Acl Phinxlog id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aclPhinxlog = $this->AclPhinxlog->get($id, [
            'contain' => []
        ]);

        $this->set('aclPhinxlog', $aclPhinxlog);
        $this->set('_serialize', ['aclPhinxlog']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aclPhinxlog = $this->AclPhinxlog->newEntity();
        if ($this->request->is('post')) {
            $aclPhinxlog = $this->AclPhinxlog->patchEntity($aclPhinxlog, $this->request->data);
            if ($this->AclPhinxlog->save($aclPhinxlog)) {
                $this->Flash->success(__('The acl phinxlog has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The acl phinxlog could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aclPhinxlog'));
        $this->set('_serialize', ['aclPhinxlog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Acl Phinxlog id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aclPhinxlog = $this->AclPhinxlog->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aclPhinxlog = $this->AclPhinxlog->patchEntity($aclPhinxlog, $this->request->data);
            if ($this->AclPhinxlog->save($aclPhinxlog)) {
                $this->Flash->success(__('The acl phinxlog has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The acl phinxlog could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aclPhinxlog'));
        $this->set('_serialize', ['aclPhinxlog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Acl Phinxlog id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aclPhinxlog = $this->AclPhinxlog->get($id);
        if ($this->AclPhinxlog->delete($aclPhinxlog)) {
            $this->Flash->success(__('The acl phinxlog has been deleted.'));
        } else {
            $this->Flash->error(__('The acl phinxlog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
