<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bestellung $bestellung
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bestellung'), ['action' => 'edit', $bestellung->BestellNr], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bestellung'), ['action' => 'delete', $bestellung->BestellNr], ['confirm' => __('Are you sure you want to delete # {0}?', $bestellung->BestellNr), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bestellung'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bestellung'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bestellung view content">
            <h3><?= h($bestellung->BestellNr) ?></h3>
            <table>
                <tr>
                    <th><?= __('Groesse') ?></th>
                    <td><?= h($bestellung->Groesse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zahlungsart') ?></th>
                    <td><?= h($bestellung->Zahlungsart) ?></td>
                </tr>
                <tr>
                    <th><?= __('BestellNr') ?></th>
                    <td><?= $this->Number->format($bestellung->BestellNr) ?></td>
                </tr>
                <tr>
                    <th><?= __('Menge') ?></th>
                    <td><?= $this->Number->format($bestellung->Menge) ?></td>
                </tr>
                <tr>
                    <th><?= __('KundeID') ?></th>
                    <td><?= $this->Number->format($bestellung->KundeID) ?></td>
                </tr>
                <tr>
                    <th><?= __('StatusID') ?></th>
                    <td><?= $this->Number->format($bestellung->StatusID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datum') ?></th>
                    <td><?= h($bestellung->Datum) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
