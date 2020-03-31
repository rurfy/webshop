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
            <style>
                a.button {
                    background-color: #d33c43;
                    border: 0.1rem solid #d33c43;
                    border-radius: .4rem;
                    color: #fff;
                    cursor: pointer;
                    display: inline-block;
                    font-size: 1.1rem;
                    font-weight: 700;
                    height: 3.8rem;
                    letter-spacing: .1rem;
                    line-height: 3.8rem;
                    padding: 0 3.0rem;
                    text-align: center;
                    text-decoration: none;
                    text-transform: uppercase;
                    white-space: nowrap;
                }
            </style>
            <?= $this->Form->submit('Bezahlen per Rechnung') ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>