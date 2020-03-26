<div class="produkt index content">
    <h3><?= __('Warenkorb') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ProduktID') ?></th>
                    <th><?= $this->Paginator->sort('Bezeichnung') ?></th>
                    <th><?= $this->Paginator->sort('Menge') ?></th>
                    <th><?= $this->Paginator->sort('Art') ?></th>
                    <th><?= $this->Paginator->sort('Preis') ?></th>
                    <th><?= $this->Paginator->sort('Gesamtpreis') ?></th>
                    <th class="actions"></th>
                </tr>
            </thead>
            <tbody>
                <?php session_start();
                $total_preis = 0;
                $total_menge = 0;
                foreach ($_SESSION['cart_item'] as $item) {
                    $einzel_preis = $item["menge"] * $item["preis"]; ?>
                    <tr>
                        <td><?= $this->Number->format($item["id"]) ?></td>
                        <td><?= h($item["bezeichnung"]) ?></td>
                        <td><?= h($item["menge"]) ?></td>
                        <td><?= h($item["art"]) ?></td>
                        <td><?= number_format($item["preis"], 2) . " €" ?></td>
                        <td><?= number_format($einzel_preis, 2) . " €" ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Entfernen'), ['action' => 'removeFromCart', $item["id"], $produkt->ProduktID]); ?>
                        </td>
                    </tr>
                    <?php $total_menge += $item["menge"];
                    $total_preis += ($item["preis"] * $item["menge"]); ?>
                <?php } ?>
                <td>Total:</td>
                <td></td>
                <td><?php echo $total_menge; ?></td>
                <td>Gesamtpreis:</td>
                <td></td>
                <td><strong><?php echo number_format($total_preis, 2) . " €"; ?></strong></td>
                <td class="actions">
                    <?= $this->Html->link(__('Warenkorb löschen'), ['action' => 'emptyCart', $produkt->ProduktID]); ?>
                </td>
            </tbody>
        </table>
    </div>
</div>