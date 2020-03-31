<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Bearbeiten'), ['action' => 'edit', $user->KundeID], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= 'Profil: ' . h($user->Benutzername) ?></h3>
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
            </table>
        </div>
    </div>
</div>