<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kunde[]|\Cake\Collection\CollectionInterface $kunde
 */
?>
<div class="kunde index content">
    <?= $this->Html->link(__('New Kunde'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Kunde') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('KundeID') ?></th>
                    <th><?= $this->Paginator->sort('Vorname') ?></th>
                    <th><?= $this->Paginator->sort('Nachname') ?></th>
                    <th><?= $this->Paginator->sort('EMail') ?></th>
                    <th><?= $this->Paginator->sort('Adresse') ?></th>
                    <th><?= $this->Paginator->sort('PLZ') ?></th>
                    <th><?= $this->Paginator->sort('Stadt') ?></th>
                    <th><?= $this->Paginator->sort('Land') ?></th>
                    <th><?= $this->Paginator->sort('Benutzername') ?></th>
                    <th><?= $this->Paginator->sort('Passwort') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kunde as $kunde): ?>
                <tr>
                    <td><?= $this->Number->format($kunde->KundeID) ?></td>
                    <td><?= h($kunde->Vorname) ?></td>
                    <td><?= h($kunde->Nachname) ?></td>
                    <td><?= h($kunde->EMail) ?></td>
                    <td><?= h($kunde->Adresse) ?></td>
                    <td><?= h($kunde->PLZ) ?></td>
                    <td><?= h($kunde->Stadt) ?></td>
                    <td><?= h($kunde->Land) ?></td>
                    <td><?= h($kunde->Benutzername) ?></td>
                    <td><?= h($kunde->Passwort) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $kunde->KundeID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kunde->KundeID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kunde->KundeID], ['confirm' => __('Are you sure you want to delete # {0}?', $kunde->KundeID)]) ?>
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
