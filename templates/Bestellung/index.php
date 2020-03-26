<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bestellung[]|\Cake\Collection\CollectionInterface $bestellung
 */
?>
<div class="bestellung index content">
    <?= $this->Html->link(__('New Bestellung'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bestellung') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('BestellNr') ?></th>
                    <th><?= $this->Paginator->sort('Menge') ?></th>
                    <th><?= $this->Paginator->sort('Groesse') ?></th>
                    <th><?= $this->Paginator->sort('Datum') ?></th>
                    <th><?= $this->Paginator->sort('Zahlungsart') ?></th>
                    <th><?= $this->Paginator->sort('KundeID') ?></th>
                    <th><?= $this->Paginator->sort('StatusID') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bestellung as $bestellung): ?>
                <tr>
                    <td><?= $this->Number->format($bestellung->BestellNr) ?></td>
                    <td><?= $this->Number->format($bestellung->Menge) ?></td>
                    <td><?= h($bestellung->Groesse) ?></td>
                    <td><?= h($bestellung->Datum) ?></td>
                    <td><?= h($bestellung->Zahlungsart) ?></td>
                    <td><?= $this->Number->format($bestellung->KundeID) ?></td>
                    <td><?= $this->Number->format($bestellung->StatusID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bestellung->BestellNr]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bestellung->BestellNr]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bestellung->BestellNr], ['confirm' => __('Are you sure you want to delete # {0}?', $bestellung->BestellNr)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
