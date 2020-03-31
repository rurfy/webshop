<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produkt[]|\Cake\Collection\CollectionInterface $produkt
 */
?>
<div class="produkt index content">
    <h3><?= __('Produkt') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Bild') ?></th>
                    <th><?= $this->Paginator->sort('Bezeichnung') ?></th>                    
                    <th><?= $this->Paginator->sort('Preis') ?></th>                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produkt as $produkt): ?>
                <tr onclick='window.location="/produkt/view/<?=$produkt->ProduktID?>";' style='cursor:pointer'>
                    <td><img src='<?= h($produkt->Bild) ?>' height='150'></td>
                    <td><?= $this->Html->link(__(h($produkt->Bezeichnung)), ['action' => 'view', $produkt->ProduktID])?> </td>                    
                    <td><?= $this->Number->format($produkt->Preis).'.00 €' ?></td>                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
