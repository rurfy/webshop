<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
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
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->KundeID) ?></td>
                    <td><?= h($user->Vorname) ?></td>
                    <td><?= h($user->Nachname) ?></td>
                    <td><?= h($user->EMail) ?></td>
                    <td><?= h($user->Adresse) ?></td>
                    <td><?= h($user->PLZ) ?></td>
                    <td><?= h($user->Stadt) ?></td>
                    <td><?= h($user->Land) ?></td>
                    <td><?= h($user->Benutzername) ?></td>
                    <td><?= h($user->Passwort) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->KundeID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->KundeID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->KundeID], ['confirm' => __('Are you sure you want to delete # {0}?', $user->KundeID)]) ?>
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
