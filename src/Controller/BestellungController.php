<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bestellung Controller
 *
 * @property \App\Model\Table\BestellungTable $Bestellung
 *
 * @method \App\Model\Entity\Bestellung[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BestellungController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bestellung = $this->paginate($this->Bestellung);

        $this->set(compact('bestellung'));
    }

    /**
     * View method
     *
     * @param string|null $id Bestellung id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bestellung = $this->Bestellung->get($id, [
            'contain' => [],
        ]);

        $this->set('bestellung', $bestellung);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bestellung = $this->Bestellung->newEmptyEntity();
        if ($this->request->is('post')) {
            $bestellung = $this->Bestellung->patchEntity($bestellung, $this->request->getData());
            if ($this->Bestellung->save($bestellung)) {
                $this->Flash->success(__('The bestellung has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bestellung could not be saved. Please, try again.'));
        }
        $this->set(compact('bestellung'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bestellung id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bestellung = $this->Bestellung->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bestellung = $this->Bestellung->patchEntity($bestellung, $this->request->getData());
            if ($this->Bestellung->save($bestellung)) {
                $this->Flash->success(__('The bestellung has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bestellung could not be saved. Please, try again.'));
        }
        $this->set(compact('bestellung'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bestellung id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bestellung = $this->Bestellung->get($id);
        if ($this->Bestellung->delete($bestellung)) {
            $this->Flash->success(__('The bestellung has been deleted.'));
        } else {
            $this->Flash->error(__('The bestellung could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
