<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produkt $produkt
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Produkt'), ['action' => 'edit', $produkt->ProduktID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Produkt'), ['action' => 'delete', $produkt->ProduktID], ['confirm' => __('Are you sure you want to delete # {0}?', $produkt->ProduktID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Produkt'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Produkt'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->create(null, ['url' => ['controller' => 'cart', 'action' => 'add', $produkt->ProduktID]]); ?>
            <?= $this->Form->control('menge'); ?>
            <?= $this->Form->submit('Zum Warenkorb hinzufügen'); ?>
            <?= $this->Form->end() ?>
    </aside>
    <div class="column-responsive column-80">
        <div class="produkt view content">
            <h3><?= h($produkt->ProduktID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Bezeichnung') ?></th>
                    <td><?= h($produkt->Bezeichnung) ?></td>
                </tr>
                <tr>
                    <th><?= __('Farbe') ?></th>
                    <td><?= h($produkt->Farbe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Art') ?></th>
                    <td><?= h($produkt->Art) ?></td>
                </tr>
                <tr>
                    <th><?= __('ProduktID') ?></th>
                    <td><?= $this->Number->format($produkt->ProduktID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preis') ?></th>
                    <td><?= $this->Number->format($produkt->Preis) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <aside class="column">

    </aside>
    <div class="column-responsive column-80">
        <?= $this->element('cartview') ?>
    </div>
</div>