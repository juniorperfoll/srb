<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Prenhez Controller
 *
 * @property \App\Model\Table\PrenhezTable $Prenhez
 *
 * @method \App\Model\Entity\Prenhez[] paginate($object = null, array $settings = [])
 */
class PrenhezController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bovinos']
        ];
        $prenhez = $this->paginate($this->Prenhez);

        $this->set(compact('prenhez'));
        $this->set('_serialize', ['prenhez']);
    }

    /**
     * View method
     *
     * @param string|null $id Prenhez id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prenhez = $this->Prenhez->get($id, [
            'contain' => ['Bovinos']
        ]);

        $this->set('prenhez', $prenhez);
        $this->set('_serialize', ['prenhez']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prenhez = $this->Prenhez->newEntity();
        if ($this->request->is('post')) {
            $prenhez = $this->Prenhez->patchEntity($prenhez, $this->request->getData());
            if ($this->Prenhez->save($prenhez)) {
                $this->Flash->success(__('The prenhez has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prenhez could not be saved. Please, try again.'));
        }
        $bovinos = $this->Prenhez->Bovinos->find('list', ['limit' => 200]);
        $this->set(compact('prenhez', 'bovinos'));
        $this->set('_serialize', ['prenhez']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Prenhez id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prenhez = $this->Prenhez->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prenhez = $this->Prenhez->patchEntity($prenhez, $this->request->getData());
            if ($this->Prenhez->save($prenhez)) {
                $this->Flash->success(__('The prenhez has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prenhez could not be saved. Please, try again.'));
        }
        $bovinos = $this->Prenhez->Bovinos->find('list', ['limit' => 200]);
        $this->set(compact('prenhez', 'bovinos'));
        $this->set('_serialize', ['prenhez']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Prenhez id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prenhez = $this->Prenhez->get($id);
        if ($this->Prenhez->delete($prenhez)) {
            $this->Flash->success(__('The prenhez has been deleted.'));
        } else {
            $this->Flash->error(__('The prenhez could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
