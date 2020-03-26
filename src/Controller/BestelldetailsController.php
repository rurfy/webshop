<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bestelldetails Controller
 *
 * @property \App\Model\Table\BestelldetailsTable $Bestelldetails
 *
 * @method \App\Model\Entity\Bestelldetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BestelldetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bestelldetails = $this->paginate($this->Bestelldetails);

        $this->set(compact('bestelldetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Bestelldetail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bestelldetail = $this->Bestelldetails->get($id, [
            'contain' => [],
        ]);

        $this->set('bestelldetail', $bestelldetail);

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bestelldetail = $this->Bestelldetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $bestelldetail = $this->Bestelldetails->patchEntity($bestelldetail, $this->request->getData());
            if ($this->Bestelldetails->save($bestelldetail)) {
                $this->Flash->success(__('The bestelldetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bestelldetail could not be saved. Please, try again.'));
        }
        $this->set(compact('bestelldetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bestelldetail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bestelldetail = $this->Bestelldetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bestelldetail = $this->Bestelldetails->patchEntity($bestelldetail, $this->request->getData());
            if ($this->Bestelldetails->save($bestelldetail)) {
                $this->Flash->success(__('The bestelldetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bestelldetail could not be saved. Please, try again.'));
        }
        $this->set(compact('bestelldetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bestelldetail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bestelldetail = $this->Bestelldetails->get($id);
        if ($this->Bestelldetails->delete($bestelldetail)) {
            $this->Flash->success(__('The bestelldetail has been deleted.'));
        } else {
            $this->Flash->error(__('The bestelldetail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
