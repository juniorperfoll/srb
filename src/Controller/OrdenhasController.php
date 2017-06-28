<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ordenhas Controller
 *
 * @property \App\Model\Table\OrdenhasTable $Ordenhas
 *
 * @method \App\Model\Entity\Ordenha[] paginate($object = null, array $settings = [])
 */
class OrdenhasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $ordenhas = $this->paginate($this->Ordenhas);

        $this->set(compact('ordenhas'));
        $this->set('_serialize', ['ordenhas']);
    }

    /**
     * View method
     *
     * @param string|null $id Ordenha id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordenha = $this->Ordenhas->get($id, [
            'contain' => []
        ]);

        $this->set('ordenha', $ordenha);
        $this->set('_serialize', ['ordenha']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ordenha = $this->Ordenhas->newEntity();
        if ($this->request->is('post')) {
            $ordenha = $this->Ordenhas->patchEntity($ordenha, $this->request->getData());
            if ($this->Ordenhas->save($ordenha)) {
                $this->Flash->success(__('The ordenha has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ordenha could not be saved. Please, try again.'));
        }
        $this->set(compact('ordenha'));
        $this->set('_serialize', ['ordenha']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ordenha id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordenha = $this->Ordenhas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordenha = $this->Ordenhas->patchEntity($ordenha, $this->request->getData());
            if ($this->Ordenhas->save($ordenha)) {
                $this->Flash->success(__('The ordenha has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ordenha could not be saved. Please, try again.'));
        }
        $this->set(compact('ordenha'));
        $this->set('_serialize', ['ordenha']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ordenha id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordenha = $this->Ordenhas->get($id);
        if ($this->Ordenhas->delete($ordenha)) {
            $this->Flash->success(__('The ordenha has been deleted.'));
        } else {
            $this->Flash->error(__('The ordenha could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
