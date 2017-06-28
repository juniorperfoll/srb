<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bovinos Controller
 *
 * @property \App\Model\Table\BovinosTable $Bovinos
 *
 * @method \App\Model\Entity\Bovino[] paginate($object = null, array $settings = [])
 */
class BovinosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $bovinos = $this->paginate($this->Bovinos);

        $this->set(compact('bovinos'));
        $this->set('_serialize', ['bovinos']);
    }

    /**
     * View method
     *
     * @param string|null $id Bovino id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bovino = $this->Bovinos->get($id, [
            'contain' => []
        ]);

        $this->set('bovino', $bovino);
        $this->set('_serialize', ['bovino']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bovino = $this->Bovinos->newEntity();
        if ($this->request->is('post')) {
            $bovino = $this->Bovinos->patchEntity($bovino, $this->request->getData());
            if ($this->Bovinos->save($bovino)) {
                $this->Flash->success(__('The bovino has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bovino could not be saved. Please, try again.'));
        }
        $this->set(compact('bovino'));
        $this->set('_serialize', ['bovino']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bovino id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bovino = $this->Bovinos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bovino = $this->Bovinos->patchEntity($bovino, $this->request->getData());
            if ($this->Bovinos->save($bovino)) {
                $this->Flash->success(__('The bovino has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bovino could not be saved. Please, try again.'));
        }
        $this->set(compact('bovino'));
        $this->set('_serialize', ['bovino']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bovino id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bovino = $this->Bovinos->get($id);
        if ($this->Bovinos->delete($bovino)) {
            $this->Flash->success(__('The bovino has been deleted.'));
        } else {
            $this->Flash->error(__('The bovino could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
