<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\CartItem;
use Cake\Event\Event;
use Cake\Core\Configure;

class CartController extends AppController
{

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
        $quantity = round($this->request->getData("menge"), 0);

        if ($quantity > 0) {
            $produkt = $this->Produkt->get($id, [
                'contain' => [],
            ]);
            if ($this->getRequest()->getSession()->check("Cart")) {
                $cartItems = $this->getRequest()->getSession()->consume("Cart");
                $c = false;
                foreach ($cartItems as $cartItem) {
                    if ($cartItem->Produkt == $produkt) {
                        $c = true;
                        $cartItem->Menge += $quantity;
                        break;
                    }
                }
                if (!$c) {
                    array_push($cartItems, new CartItem($produkt, $quantity));
                }
                $this->getRequest()->getSession()->write("Cart", $cartItems);
            }
            else {
                $this->getRequest()->getSession()->write("Cart", [new CartItem($produkt, $quantity)]);
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

    public function delete($id = null)
    {
        $this->loadModel('Produkt');

        if ($this->getRequest()->getSession()->check("Cart")) {
            $cartItems = $this->getRequest()->getSession()->consume("Cart");
            $produkt = $this->Produkt->get($id, [
                'contain' => [],
            ]);
            foreach ($cartItems as $cartItem) {
                if ($cartItem->Produkt == $produkt) {
                    if (($key = array_search($cartItem, $cartItems)) !== false) {
                        unset($cartItems[$key]);
                    }
                }
                break;
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
