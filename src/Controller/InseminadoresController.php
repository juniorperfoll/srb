<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Inseminadores Controller
 *
 * @property \App\Model\Table\InseminadoresTable $Inseminadores
 *
 * @method \App\Model\Entity\Inseminadore[] paginate($object = null, array $settings = [])
 */
class InseminadoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $inseminadores = $this->paginate($this->Inseminadores);

        $this->set(compact('inseminadores'));
        $this->set('_serialize', ['inseminadores']);
    }

    /**
     * View method
     *
     * @param string|null $id Inseminadore id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inseminadore = $this->Inseminadores->get($id, [
            'contain' => []
        ]);

        $this->set('inseminadore', $inseminadore);
        $this->set('_serialize', ['inseminadore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inseminadore = $this->Inseminadores->newEntity();
        if ($this->request->is('post')) {
            $inseminadore = $this->Inseminadores->patchEntity($inseminadore, $this->request->getData());
            if ($this->Inseminadores->save($inseminadore)) {
                $this->Flash->success('Salvo com sucesso!');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Deu ruim, tente novamente.');
        }
        $this->set(compact('inseminadore'));
        $this->set('_serialize', ['inseminadore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Inseminadore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inseminadore = $this->Inseminadores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inseminadore = $this->Inseminadores->patchEntity($inseminadore, $this->request->getData());
            if ($this->Inseminadores->save($inseminadore)) {
                $this->Flash->success(__('The inseminadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inseminadore could not be saved. Please, try again.'));
        }
        $this->set(compact('inseminadore'));
        $this->set('_serialize', ['inseminadore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inseminadore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inseminadore = $this->Inseminadores->get($id);
        if ($this->Inseminadores->delete($inseminadore)) {
            $this->Flash->success(__('The inseminadore has been deleted.'));
        } else {
            $this->Flash->error(__('The inseminadore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
