<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->KundeID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->KundeID], ['confirm' => __('Are you sure you want to delete # {0}?', $user->KundeID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->KundeID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Vorname') ?></th>
                    <td><?= h($user->Vorname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nachname') ?></th>
                    <td><?= h($user->Nachname) ?></td>
                </tr>
                <tr>
                    <th><?= __('EMail') ?></th>
                    <td><?= h($user->EMail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($user->Adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('PLZ') ?></th>
                    <td><?= h($user->PLZ) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stadt') ?></th>
                    <td><?= h($user->Stadt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Land') ?></th>
                    <td><?= h($user->Land) ?></td>
                </tr>
                <tr>
                    <th><?= __('Benutzername') ?></th>
                    <td><?= h($user->Benutzername) ?></td>
                </tr>
                <tr>
                    <th><?= __('Passwort') ?></th>
                    <td><?= h($user->Passwort) ?></td>
                </tr>
                <tr>
                    <th><?= __('KundeID') ?></th>
                    <td><?= $this->Number->format($user->KundeID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
