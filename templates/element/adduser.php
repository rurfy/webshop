<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create(null, ['url' => ['action' => 'invoice']]); ?>
            <fieldset>
                <legend><?= __('Geben Sie Ihre Lieferadresse an') ?></legend>
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
            
            <?= $this->Form->submit('Bezahlen per Rechnung') ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>