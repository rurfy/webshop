<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produkt[]|\Cake\Collection\CollectionInterface $produkt
 */
?>
<div class="produkt index content">
    <!-- <?= $this->Html->link(__('New Produkt'), ['action' => 'add'], ['class' => 'button float-right']) ?> -->
    <h3><?= __('Produkt') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Bild') ?></th>
                    <th><?= $this->Paginator->sort('Bezeichnung') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Farbe') ?></th>
                    <th><?= $this->Paginator->sort('Art') ?></th> -->
                    <th><?= $this->Paginator->sort('Preis') ?></th>                    
                    <!-- <th class="actions"><?= __('Actions') ?></th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produkt as $produkt): ?>
                <tr onclick='window.location="/produkt/view/<?=$produkt->ProduktID?>";' style='cursor:pointer'>
                    <td><img src='<?= h($produkt->Bild) ?>' height='150'></td>
                    <td><?= $this->Html->link(__(h($produkt->Bezeichnung)), ['action' => 'view', $produkt->ProduktID])?> </td>
                    <!-- <td><?= h($produkt->Farbe) ?></td>
                    <td><?= h($produkt->Art) ?></td> -->
                    <td><?= $this->Number->format($produkt->Preis).'.00 €' ?></td>                    
                    <!-- <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $produkt->ProduktID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produkt->ProduktID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produkt->ProduktID], ['confirm' => __('Are you sure you want to delete # {0}?', $produkt->ProduktID)]) ?> 
                    </td> -->
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
