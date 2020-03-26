<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kunde[]|\Cake\Collection\CollectionInterface $kunde
 */
?>
<div class="kunde index content">
    <h3><?= __('Kunde') ?></h3>
    <div style="text-align: center">
        Bist du schon Kunde?
        <?= $this->Html->link(__('Nein'), ['action' => 'add'], ['class' => 'button float-left']) ?>
        <?= $this->Html->link(__('Ja'), ['action' => 'view'], ['class' => 'button float-right']) ?>
    </div>
</div>
