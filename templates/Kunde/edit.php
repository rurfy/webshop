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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $kunde->KundeID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $kunde->KundeID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Kunde'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kunde form content">
            <?= $this->Form->create($kunde) ?>
            <fieldset>
                <legend><?= __('Edit Kunde') ?></legend>
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
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
