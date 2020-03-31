<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content">
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
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
