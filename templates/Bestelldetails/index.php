<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bestelldetail[]|\Cake\Collection\CollectionInterface $bestelldetails
 */
?>
<div class="bestelldetails index content">
    <?= $this->Html->link(__('New Bestelldetail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bestelldetails') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('DetailID') ?></th>
                    <th><?= $this->Paginator->sort('BestellNr') ?></th>
                    <th><?= $this->Paginator->sort('ProduktID') ?></th>
                    <th><?= $this->Paginator->sort('Menge') ?></th>
                    <th><?= $this->Paginator->sort('Groesse') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bestelldetails as $bestelldetail): ?>
                <tr>
                    <td><?= $this->Number->format($bestelldetail->DetailID) ?></td>
                    <td><?= $this->Number->format($bestelldetail->BestellNr) ?></td>
                    <td><?= $this->Number->format($bestelldetail->ProduktID) ?></td>
                    <td><?= $this->Number->format($bestelldetail->Menge) ?></td>
                    <td><?= h($bestelldetail->Groesse) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bestelldetail->DetailID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bestelldetail->DetailID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bestelldetail->DetailID], ['confirm' => __('Are you sure you want to delete # {0}?', $bestelldetail->DetailID)]) ?>
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
