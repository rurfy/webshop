<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bestelldetail $bestelldetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Bestelldetails'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bestelldetails form content">
            <?= $this->Form->create($bestelldetail) ?>
            <fieldset>
                <legend><?= __('Add Bestelldetail') ?></legend>
                <?php
                    echo $this->Form->control('BestellNr');
                    echo $this->Form->control('ProduktID');
                    echo $this->Form->control('Menge');
                    echo $this->Form->control('Groesse');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
