<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Core\Configure;

class CartController extends AppController {

    public function beforeFilter(Event $event)
    {
        // allow all action
        //$this->Auth->allow();
    }
    
    public function index()
    {
        $produkt = $this->paginate($this->Produkt);

        $this->set(compact('produkt'));
    }

    public function add($id = null) {
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

        return $this->redirect(['controller'=>'produkt', 'action' => 'view/'.$id]);
    }

    public function view() {
    }

    public function delete($id = null, $pID = null) {
        session_start();

        if(array_key_exists($id, $_SESSION["cart_item"])) {
            unset($_SESSION['cart_item'][$id]);
        }

        return $this->redirect(['action' => 'view/'.$pID]);
    }

    public function emptyCart($id = null)
    {
        session_start();
        session_destroy();

        return $this->redirect(['action' => 'view/'.$id]);
    }
}