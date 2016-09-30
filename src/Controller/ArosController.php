<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aros Controller
 *
 * @property \App\Model\Table\ArosTable $Aros
 */
class ArosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $aros = $this->paginate($this->Aros);

        $this->set(compact('aros'));
        $this->set('_serialize', ['aros']);
    }

    /**
     * View method
     *
     * @param string|null $id Aro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aro = $this->Aros->get($id, [
            'contain' => []
        ]);

        $this->set('aro', $aro);
        $this->set('_serialize', ['aro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aro = $this->Aros->newEntity();
        if ($this->request->is('post')) {
            $aro = $this->Aros->patchEntity($aro, $this->request->data);
            if ($this->Aros->save($aro)) {
                $this->Flash->success(__('The aro has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aro could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aro'));
        $this->set('_serialize', ['aro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aro = $this->Aros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aro = $this->Aros->patchEntity($aro, $this->request->data);
            if ($this->Aros->save($aro)) {
                $this->Flash->success(__('The aro has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aro could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aro'));
        $this->set('_serialize', ['aro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aro = $this->Aros->get($id);
        if ($this->Aros->delete($aro)) {
            $this->Flash->success(__('The aro has been deleted.'));
        } else {
            $this->Flash->error(__('The aro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
