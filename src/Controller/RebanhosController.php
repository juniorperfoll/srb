<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Rebanhos Controller
 *
 * @property \App\Model\Table\RebanhosTable $Rebanhos
 *
 * @method \App\Model\Entity\Rebanho[] paginate($object = null, array $settings = [])
 */
class RebanhosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $rebanhos = $this->paginate($this->Rebanhos);

        $this->set(compact('rebanhos'));
        $this->set('_serialize', ['rebanhos']);
    }

    /**
     * View method
     *
     * @param string|null $id Rebanho id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rebanho = $this->Rebanhos->get($id, [
            'contain' => []
        ]);

        $this->set('rebanho', $rebanho);
        $this->set('_serialize', ['rebanho']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rebanho = $this->Rebanhos->newEntity();
        if ($this->request->is('post')) {
            $rebanho = $this->Rebanhos->patchEntity($rebanho, $this->request->getData());
            if ($this->Rebanhos->save($rebanho)) {
                $this->Flash->success(__('The rebanho has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rebanho could not be saved. Please, try again.'));
        }
        $this->set(compact('rebanho'));
        $this->set('_serialize', ['rebanho']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rebanho id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rebanho = $this->Rebanhos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rebanho = $this->Rebanhos->patchEntity($rebanho, $this->request->getData());
            if ($this->Rebanhos->save($rebanho)) {
                $this->Flash->success(__('The rebanho has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rebanho could not be saved. Please, try again.'));
        }
        $this->set(compact('rebanho'));
        $this->set('_serialize', ['rebanho']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rebanho id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rebanho = $this->Rebanhos->get($id);
        if ($this->Rebanhos->delete($rebanho)) {
            $this->Flash->success(__('The rebanho has been deleted.'));
        } else {
            $this->Flash->error(__('The rebanho could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
