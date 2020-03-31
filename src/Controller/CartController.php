<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\CartItem;
use Cake\Event\Event;
use Cake\Core\Configure;

class CartController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['delete', 'emptyCart']);
    }

    public function initialize(): void
    {
        parent::initialize();
        $this->modelClass = false;
    }

    public function index()
    {
    }

    public function add($id = null)
    {
        $this->loadModel('Produkt');

        $quantity = 0;
        $groesse = 0;
        $quantity = round($this->request->getData("menge"), 0);
        $groesse = $this->request->getData("groesse");

        if ($quantity > 0) {
            $produkt = $this->Produkt->get($id, [
                'contain' => [],
            ]);
            if ($this->getRequest()->getSession()->check("Cart")) {
                $cartItems = $this->getRequest()->getSession()->consume("Cart");
                $c = false;
                foreach ($cartItems as $cartItem) {
                    if ($cartItem->Produkt == $produkt && $cartItem->groesse == $groesse) {
                        $c = true;
                        $cartItem->Menge += $quantity;
                        break;
                    }
                }
                if (!$c) {
                    array_push($cartItems, new CartItem($produkt, $quantity, $groesse));
                }
                $this->getRequest()->getSession()->write("Cart", $cartItems);
            } else {
                $this->getRequest()->getSession()->write("Cart", [new CartItem($produkt, $quantity, $groesse)]);
            }
        } else {
            $this->Flash->error(__('Menge muss mindestens 1 und eine Zahl sein.'));
            return $this->redirect($this->referer());
        }

        return $this->redirect(['action' => 'index']);
    }

    public function view()
    {
    }

    public function delete($groesse = null, $id = null)
    {
        $this->loadModel('Produkt');
        $g = $groesse;
        if ($this->getRequest()->getSession()->check("Cart")) {
            $cartItems = $this->getRequest()->getSession()->consume("Cart");
            $produkt = $this->Produkt->get($id, [
                'contain' => [],
            ]);
            foreach ($cartItems as $key => $value) {
                if ($value->Produkt == $produkt  && $value->groesse == $g) {
                    unset($cartItems[$key]);
                    break;
                }                
            }
            $this->getRequest()->getSession()->write("Cart", $cartItems);
        }

        return $this->redirect($this->referer());
    }


    public function emptyCart()
    {
        $this->getRequest()->getSession()->delete("Cart");
        return $this->redirect($this->referer());
    }
}
