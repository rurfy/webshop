<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bestelldetail $bestelldetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bestelldetail'), ['action' => 'edit', $bestelldetail->DetailID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bestelldetail'), ['action' => 'delete', $bestelldetail->DetailID], ['confirm' => __('Are you sure you want to delete # {0}?', $bestelldetail->DetailID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bestelldetails'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bestelldetail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bestelldetails view content">
            <h3><?= h($bestelldetail->DetailID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Groesse') ?></th>
                    <td><?= h($bestelldetail->Groesse) ?></td>
                </tr>
                <tr>
                    <th><?= __('DetailID') ?></th>
                    <td><?= $this->Number->format($bestelldetail->DetailID) ?></td>
                </tr>
                <tr>
                    <th><?= __('BestellNr') ?></th>
                    <td><?= $this->Number->format($bestelldetail->BestellNr) ?></td>
                </tr>
                <tr>
                    <th><?= __('ProduktID') ?></th>
                    <td><?= $this->Number->format($bestelldetail->ProduktID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Menge') ?></th>
                    <td><?= $this->Number->format($bestelldetail->Menge) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
