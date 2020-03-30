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
            <?= $this->Form->postLink(
                __('Delete'),
                ['controller' => 'Users', 'action' => 'view', $user->KundeID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->KundeID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                    echo $this->Form->control('Vorname');
                    echo $this->Form->control('Nachname');
                    echo $this->Form->control('EMail');
                    echo $this->Form->control('Adresse');
                    echo $this->Form->control('PLZ');
                    echo $this->Form->control('Stadt');
                    echo $this->Form->control('Land');
                    echo $this->Form->control('Benutzername');
                    echo $this->Form->control('Passwort');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
