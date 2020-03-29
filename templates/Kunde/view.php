<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kunde $kunde
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Kunde'), ['action' => 'edit', $kunde->KundeID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Kunde'), ['action' => 'delete', $kunde->KundeID], ['confirm' => __('Are you sure you want to delete # {0}?', $kunde->KundeID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Kunde'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Kunde'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kunde view content">
            <h3><?= h($kunde->KundeID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Vorname') ?></th>
                    <td><?= h($kunde->Vorname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nachname') ?></th>
                    <td><?= h($kunde->Nachname) ?></td>
                </tr>
                <tr>
                    <th><?= __('EMail') ?></th>
                    <td><?= h($kunde->EMail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($kunde->Adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('PLZ') ?></th>
                    <td><?= h($kunde->PLZ) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stadt') ?></th>
                    <td><?= h($kunde->Stadt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Land') ?></th>
                    <td><?= h($kunde->Land) ?></td>
                </tr>
                <tr>
                    <th><?= __('Benutzername') ?></th>
                    <td><?= h($kunde->Benutzername) ?></td>
                </tr>
                <tr>
                    <th><?= __('Passwort') ?></th>
                    <td><?= h($kunde->Passwort) ?></td>
                </tr>
                <tr>
                    <th><?= __('KundeID') ?></th>
                    <td><?= $this->Number->format($kunde->KundeID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
