<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Produkt Controller
 *
 * @property \App\Model\Table\ProduktTable $Produkt
 *
 * @method \App\Model\Entity\Produkt[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProduktController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $produkt = $this->paginate($this->Produkt);

        $this->set(compact('produkt'));
    }

    /**
     * View method
     *
     * @param string|null $id Produkt id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produkt = $this->Produkt->get($id, [
            'contain' => [],
        ]);

        $this->set('produkt', $produkt);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produkt = $this->Produkt->newEmptyEntity();
        if ($this->request->is('post')) {
            $produkt = $this->Produkt->patchEntity($produkt, $this->request->getData());
            if ($this->Produkt->save($produkt)) {
                $this->Flash->success(__('The produkt has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produkt could not be saved. Please, try again.'));
        }
        $this->set(compact('produkt'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Produkt id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produkt = $this->Produkt->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produkt = $this->Produkt->patchEntity($produkt, $this->request->getData());
            if ($this->Produkt->save($produkt)) {
                $this->Flash->success(__('The produkt has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produkt could not be saved. Please, try again.'));
        }
        $this->set(compact('produkt'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Produkt id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produkt = $this->Produkt->get($id);
        if ($this->Produkt->delete($produkt)) {
            $this->Flash->success(__('The produkt has been deleted.'));
        } else {
            $this->Flash->error(__('The produkt could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function addToCart($id = null)
    {
        session_start();
        $produkt = $this->Produkt->get($id, [
            'contain' => [],
        ]);

        $quantity = 0;
        $quantity = round($this->request->getData("menge"), 0);

        $_SESSION["cart_item"][$produkt->ProduktID]["id"] = $produkt->ProduktID;
        $_SESSION["cart_item"][$produkt->ProduktID]["bezeichnung"] = $produkt->Bezeichnung;
        $_SESSION["cart_item"][$produkt->ProduktID]["art"] = $produkt->Art;
        $_SESSION["cart_item"][$produkt->ProduktID]["preis"] = $produkt->Preis;
        if($quantity > 0) {
            if(array_key_exists($produkt->ProduktID, $_SESSION["cart_item"])) {
                $_SESSION["cart_item"][$produkt->ProduktID]["menge"] += $quantity;   
            }
            else {
                $_SESSION["cart_item"][$produkt->ProduktID]["menge"] = $quantity;  
            }
        }
        else {
            $this->Flash->error(__('Menge muss mindestens 1 und eine Zahl sein.'));
        }

        $this->redirect($this->referer());

    }

    public function removeFromCart($id = null)
    {
        session_start();

        if(array_key_exists($id, $_SESSION["cart_item"])) {
            unset($_SESSION['cart_item'][$id]);
        }

        $this->redirect($this->referer());
    }

    public function emptyCart($id = null)
    {
        session_start();
        session_destroy();

        $this->redirect($this->referer());
    }

    public function cart($id = null)
    {

    }
}
