<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Inseminacoes Controller
 *
 * @property \App\Model\Table\InseminacoesTable $Inseminacoes
 *
 * @method \App\Model\Entity\Inseminaco[] paginate($object = null, array $settings = [])
 */
class InseminacoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bovinos', 'Inseminadors']
        ];
        $inseminacoes = $this->paginate($this->Inseminacoes);

        $this->set(compact('inseminacoes'));
        $this->set('_serialize', ['inseminacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Inseminaco id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inseminaco = $this->Inseminacoes->get($id, [
            'contain' => ['Bovinos', 'Inserminadors']
        ]);

        $this->set('inseminaco', $inseminaco);
        $this->set('_serialize', ['inseminaco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inseminaco = $this->Inseminacoes->newEntity();
        if ($this->request->is('post')) {
            $inseminaco = $this->Inseminacoes->patchEntity($inseminaco, $this->request->getData());
            if ($this->Inseminacoes->save($inseminaco)) {
                $this->Flash->success(__('The inseminaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inseminaco could not be saved. Please, try again.'));
        }
        $bovinos = $this->Inseminacoes->Bovinos->find('list', ['limit' => 200]);
        $inserminadors = $this->Inseminacoes->Inserminadors->find('list', ['limit' => 200]);
        $this->set(compact('inseminaco', 'bovinos', 'inseminadores'));
        $this->set('_serialize', ['inseminaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Inseminaco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inseminaco = $this->Inseminacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inseminaco = $this->Inseminacoes->patchEntity($inseminaco, $this->request->getData());
            if ($this->Inseminacoes->save($inseminaco)) {
                $this->Flash->success(__('The inseminaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inseminaco could not be saved. Please, try again.'));
        }
        $bovinos = $this->Inseminacoes->Bovinos->find('list', ['limit' => 200]);
        $inserminadors = $this->Inseminacoes->Inserminadors->find('list', ['limit' => 200]);
        $this->set(compact('inseminaco', 'bovinos', 'inserminadors'));
        $this->set('_serialize', ['inseminaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inseminaco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inseminaco = $this->Inseminacoes->get($id);
        if ($this->Inseminacoes->delete($inseminaco)) {
            $this->Flash->success(__('The inseminaco has been deleted.'));
        } else {
            $this->Flash->error(__('The inseminaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
