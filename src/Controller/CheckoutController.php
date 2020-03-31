<?php

namespace App\Controller;

use App\Controller\AppController;
use TCPDF;

class CheckoutController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check.
        $this->Authentication->addUnauthenticatedActions(['index', 'invoice']);
    }

    public function index()
    {
        $this->loadModel("Users");
        $userIdentity = $this->request->getAttribute('identity');
        if ($userIdentity) {
            $user = $this->Users->get($userIdentity->KundeID, [
                'contain' => [],
            ]);
        } else {
            $user = $this->Users->newEmptyEntity();
        }
        $this->set(compact('user'));
    }

    public function invoice()
    {
        $daten = $this->request->getData();               
        $userIdentity = $this->request->getAttribute('identity');
        if ($userIdentity) {
            $this->loadModel("Users");
            $userIdentity = $this->request->getAttribute('identity');
            $user = $this->Users->get($userIdentity->KundeID, [
                'contain' => [],
            ]);

            $this->set(compact('user'));
        } else {           
            $check = false;
            foreach ($daten as $data) {
                if (!$data) {
                    $check = true;
                    break;
                }
            }
            if ($check) {
                $this->Flash->error(__('Nicht genügend Daten angegeben.'));
                return $this->redirect($this->referer());
            }
        } 
        $total_preis = 0;
        $total_menge = 0;
        $cartString = "";
        $cartItems = $this->getRequest()->getSession()->read("Cart");
        if ($cartItems) {
            foreach ($cartItems as $cartItem) {
                switch ($cartItem->groesse) {
                    case 0:
                        $groesse = 'XS';
                        break;
                    case 1:
                        $groesse = 'S';
                        break;
                    case 2:
                        $groesse = 'M';
                        break;
                    case 3:
                        $groesse = 'L';
                        break;
                    case 4:
                        $groesse = 'XL';
                        break;
                }
                $produkt = $cartItem->Produkt;
                $einzel_preis = $cartItem->Menge * $produkt->Preis;
                $cartString = $cartString . "
                <tr>
                    <td>" .  h($produkt->Bezeichnung)  . "</td>
                    <td>" .  h($cartItem->Menge)  . "</td>
                    <td>" .  h($groesse)  . "</td>
                    <td>" .  number_format($produkt->Preis, 2) . " €"  . "</td>
                    <td>" .  number_format($einzel_preis, 2) . " €"  . "</td>
                </tr>";
                $total_menge += $cartItem->Menge;
                $total_preis += ($produkt->Preis * $cartItem->Menge);
            }
        }
        
        $cartString = strval($cartString);
        
        if ($userIdentity) {
            $html = "<h1>" . h('Rechnung') .  "</h1>

        <div class='row'>
            <div class='column content'>
                <h3>" . h("Kundenanschrift") . "</h3>
                <table>
                    <tr>
                        <td>" . h($user->Vorname) . "</td>
                    </tr>
                    <tr>
                        <td>" .  h($user->Nachname)  . "</td>
                    </tr>
                    <tr>
                        <td>" .  h($user->EMail)  . "</td>
                    </tr>
                    <tr>
                        <td>" .  h($user->Adresse)  . "</td>
                    </tr>
                    <tr>
                        <td>" .  h($user->PLZ)  . "</td>
                    </tr>
                    <tr>
                        <td>" .  h($user->Stadt)  . "</td>
                    </tr>
                </table>
            </div>
            <div class='column content'>
                <h3>" .  h("Rechnungsdetails")  . "</h3>
                <table>
                    <tr>
                        <th>" .  __('Rechnungsnummer')  . "</th>
                        <td>" .  h('')  . "</td>
                    </tr>
                    <tr>
                        <th>" .  __('Kundennummer')  . "</th>
                        <td>" .  h($user->KundeID)  . "</td>
                    </tr>
                    <tr>
                        <th>" .  __('Datum')  . "</th>
                        <td>" .  h(date('d/m/Y'))  . "</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class='content'>
            <h3>" .  __('Warenkorb')  . "</h3>
            <div class='table-responsive'>
                <table>
                    <thead>
                        <tr>
                            <th>" .  h('Bezeichnung')  . "</th>
                            <th>" .  h('Menge')  . "</th>
                            <th>" .  h('Größe')  . "</th>
                            <th>" .  h('Preis')  . "</th>
                            <th>" .  h('Gesamtpreis')  . "</th>
                        </tr>
                    </thead>
                    <tbody>
                        " . $cartString  . "
                        <tr>
                        <td>Total:</td>
                        <td>" .  $total_menge  . "</td>
                        <td></td>
                        <td>Gesamtpreis:</td>
                        <td><strong>" .  number_format($total_preis, 2) . " €"  . "</strong></td></tr>
                    </tbody>
                </table>
            </div>
        </div>";
        }else {
            $html = "<h1>" . h('Rechnung') .  "</h1>            
        <div class='row'>
            <div class='column content'>
                <h3>" . h("Kundenanschrift") . "</h3>
                <table>
                    <tr>
                        <td>" . $daten['Vorname'] . "</td>
                    </tr>
                    <tr>
                        <td>" .  $daten['Nachname']  . "</td>
                    </tr>
                    <tr>
                        <td>" .  $daten['EMail']  . "</td>
                    </tr>
                    <tr>
                        <td>" .  $daten['Adresse']  . "</td>
                    </tr>
                    <tr>
                        <td>" .  $daten['PLZ']  . "</td>
                    </tr>
                    <tr>
                        <td>" .  $daten['Stadt']  . "</td>
                    </tr>
                </table>
            </div>
            <div class='column content'>
                <h3>" .  h("Rechnungsdetails")  . "</h3>
                <table>
                    <tr>
                        <th>" .  __('Rechnungsnummer')  . "</th>
                        <td>" .  h('')  . "</td>
                    </tr>
                    <tr>
                        <th>" .  __('Datum')  . "</th>
                        <td>" .  h(date('d/m/Y'))  . "</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class='content'>
            <h3>" .  __('Warenkorb')  . "</h3>
            <div class='table-responsive'>
                <table>
                    <thead>
                        <tr>
                            <th>" .  h('Bezeichnung')  . "</th>
                            <th>" .  h('Menge')  . "</th>
                            <th>" .  h('Größe')  . "</th>
                            <th>" .  h('Preis')  . "</th>
                            <th>" .  h('Gesamtpreis')  . "</th>
                        </tr>
                    </thead>
                    <tbody>
                        " . $cartString  . "
                        <tr>
                        <td>Total:</td>
                        <td>" .  $total_menge  . "</td>
                        <td></td>
                        <td>Gesamtpreis:</td>
                        <td><strong>" .  number_format($total_preis, 2) . " €"  . "</strong></td></tr>
                    </tbody>
                </table>
            </div>
        </div>";
        }
        // Erstellung des PDF Dokuments
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Dokumenteninformationen
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor("Kitos GmbH");
        $pdf->SetTitle('Rechnung ' . 'Rechnungsnummer');
        $pdf->SetSubject('Rechnung ' . "Rechnungsnummer");

        // Header und Footer Informationen
        $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // Auswahl des Font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetMargins(PDF_MARGIN_LEFT, 15, PDF_MARGIN_RIGHT);

        // Header und Footer Margins
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // Automatisches Autobreak der Seiten
        $pdf->SetAutoPageBreak(TRUE, 40);

        // Image Scale 
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // Schriftart
        //$pdf->SetFont('proximanova', '', 10);

        $pdf->AddPage();

        // Fügt den HTML Code in das PDF Dokument ein
        $pdf->writeHTML($html);

        //Ausgabe der PDF

        //Variante 1: PDF direkt an den Benutzer senden:
        $pdf->Output("Hallo.pdf", 'I');

        $this->redirect($this->referer());
    }
}
