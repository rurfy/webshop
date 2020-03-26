<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bestellung $bestellung
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bestellung->BestellNr],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bestellung->BestellNr), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bestellung'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bestellung form content">
            <?= $this->Form->create($bestellung) ?>
            <fieldset>
                <legend><?= __('Edit Bestellung') ?></legend>
                <?php
                    echo $this->Form->control('Menge');
                    echo $this->Form->control('Groesse');
                    echo $this->Form->control('Datum');
                    echo $this->Form->control('Zahlungsart');
                    echo $this->Form->control('KundeID');
                    echo $this->Form->control('StatusID');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
