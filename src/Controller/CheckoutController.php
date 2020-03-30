<?php

namespace App\Controller;

use App\Controller\AppController;

class CheckoutController extends AppController
{

    public function index()
    {
        $this->loadModel("Users");
        $userIdentity = $this->request->getAttribute('identity');
        $user = $this->Users->get($userIdentity->KundeID, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }
}
