<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('zurück'), ['action' => 'view', $user->KundeID], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user, ['url' => ['controller' => 'Users', 'action' => 'edit', $user->KundeID]]) ?>
            <fieldset>
                <legend><?= __('Anpassen') ?></legend>
                <?php
                echo $this->Form->control('Vorname');
                echo $this->Form->control('Nachname');
                echo $this->Form->control('EMail');
                echo $this->Form->control('Adresse');
                echo $this->Form->control('PLZ');
                echo $this->Form->control('Stadt');
                echo $this->Form->control('Land');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Bestätigen')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>