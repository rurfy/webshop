<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produkt $produkt
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produkt view content">
            <h3><?= h($produkt->Bezeichnung) ?></h3>
            <table>
                <tr>
                    <th><?= __('Farbe') ?></th>
                    <td><?= h($produkt->Farbe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Art') ?></th>
                    <td><?= h($produkt->Art) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bild') ?></th>
                    <td> <img src='<?= h($produkt->Bild) ?>' height='250'> </td>
                </tr>
                <tr>
                    <th><?= __('Preis') ?></th>
                    <td><?= $this->Number->format($produkt->Preis) . '.00 €' ?></td>
                </tr>
            </table>
            <?= $this->Form->create(null, ['url' => ['controller' => 'cart', 'action' => 'add', $produkt->ProduktID]]); ?>
            <table>
                <tr>
                    <td>
                        Menge
                    </td>
                    <td>
                        <?= $this->Form->control('menge', array('label' => false)); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Größe
                    </td>
                    <td>
                        <?php echo $this->Form->select(
                            'groesse',
                            ['XS', 'S', 'M', 'L', 'XL'],
                            ['empty' => 'Bitte auswählen']
                        ); ?>
                    </td>
                </tr>
            </table>

            <?= $this->Form->submit('Zum Warenkorb hinzufügen'); ?>
            <?= $this->Form->end() ?>

        </div>
    </div>
</div>