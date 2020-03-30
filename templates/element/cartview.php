<div class="cart index content">
    <h3><?= __('Warenkorb') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ProduktID') ?></th>
                    <th><?= $this->Paginator->sort('Bezeichnung') ?></th>
                    <th><?= $this->Paginator->sort('Menge') ?></th>
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
                        $produkt = $cartItem->Produkt;
                        $einzel_preis = $cartItem->Menge * $produkt->Preis; ?>
                        <tr>
                            <td><?= $this->Number->format($produkt->ProduktID) ?></td>
                            <td><?= h($produkt->Bezeichnung) ?></td>
                            <td><?= h($cartItem->Menge) ?></td>
                            <td><?= number_format($produkt->Preis, 2) . " €" ?></td>
                            <td><?= number_format($einzel_preis, 2) . " €" ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Entfernen'), ['action' => 'delete', $produkt->ProduktID]); ?>
                            </td>
                        </tr>
                <?php $total_menge += $cartItem->Menge;
                        $total_preis += ($produkt->Preis * $cartItem->Menge);
                    }
                }
                ?>
                <td>Total:</td>
                <td></td>
                <td><?php echo $total_menge; ?></td>
                <td>Gesamtpreis:</td>
                <td></td>
                <td><strong><?php echo number_format($total_preis, 2) . " €"; ?></strong></td>
                <td class="actions">
                    <?= $this->Html->link(__('Warenkorb löschen'), ['action' => 'emptyCart']); ?>
                </td>
            </tbody>
        </table>
    </div>
    <?= $this->Html->link(__('Warenkorb absenden'), ['controller' => 'checkout', 'action' => 'index']) ?>
</div>