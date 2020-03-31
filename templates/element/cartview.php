<div class="cart index content">
    <h3><?= __('Warenkorb') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Bezeichnung') ?></th>
                    <th><?= $this->Paginator->sort('Menge') ?></th>
                    <th><?= $this->Paginator->sort('Größe') ?></th>
                    <th><?= $this->Paginator->sort('Preis') ?></th>
                    <th><?= $this->Paginator->sort('Gesamtpreis') ?></th>
                    <th class="actions"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_preis = 0;
                $total_menge = 0;
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
                        $einzel_preis = $cartItem->Menge * $produkt->Preis; ?>
                        <tr>
                            <td><?= h($produkt->Bezeichnung) ?></td>
                            <td><?= h($cartItem->Menge) ?></td>
                            <td><?= h($groesse) ?></td>
                            <td><?= number_format($produkt->Preis, 2) . " €" ?></td>
                            <td><?= number_format($einzel_preis, 2) . " €" ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Entfernen'), ['action' => 'delete', $cartItem->groesse , $produkt->ProduktID]); ?>
                            </td>
                        </tr>
                <?php $total_menge += $cartItem->Menge;
                        $total_preis += ($produkt->Preis * $cartItem->Menge);
                    }
                }
                ?>
                <td>Total:</td>
                <td><?php echo $total_menge; ?></td>
                <td></td>
                <td>Gesamtpreis:</td>
                <td><strong><?php echo number_format($total_preis, 2) . " €"; ?></strong></td>
                <td class="actions">
                    <?= $this->Html->link(__('Warenkorb löschen'), ['action' => 'emptyCart']); ?>
                </td>
            </tbody>
        </table>
    </div>
    <style>
        a.button {
            background-color: #d33c43;
            border: 0.1rem solid #d33c43;
            border-radius: .4rem;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 1.1rem;
            font-weight: 700;
            height: 3.8rem;
            letter-spacing: .1rem;
            line-height: 3.8rem;
            padding: 0 3.0rem;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            white-space: nowrap;
        }
    </style>
    <?= $this->Html->link(__('Warenkorb absenden'), ['controller' => 'checkout', 'action' => 'index'], ['class' => 'button']) ?>
</div>