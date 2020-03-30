<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produkt $produkt
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Produkt'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produkt form content">
            <?= $this->Form->create($produkt) ?>
            <fieldset>
                <legend><?= __('Add Produkt') ?></legend>
                <?php
                    echo $this->Form->control('Bezeichnung');
                    echo $this->Form->control('Farbe');
                    echo $this->Form->control('Art');
                    echo $this->Form->control('Preis');
                    echo $this->Form->control('Bild');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
