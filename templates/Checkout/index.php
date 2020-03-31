<div class="column">
    <div class="row">
        <div class="side-nav">
            <h4 class="heading"><?= __('Lieferadresse') ?></h4>
            <?php if (!$this->request->getAttribute('identity')) { ?>
                <?= __('Hast du bereits einen Account?') ?>
                <?= $this->Html->link(__('Jetzt anmelden'), ['controller' => 'users', 'action' => 'add']) ?>
            <?php } ?>
        </div>
    </div>
    <div class="row">
        <?php
        if ($this->request->getAttribute('identity')) { ?>
            <?= $this->element('edituser', ["user" => $user]) ?>
        <?php
        } else { ?>
            <?= $this->element('adduser') ?>
        <?php }
        ?>
    </div>
    <?php if ($this->request->getAttribute('identity')) { ?>
        <?= $this->Html->link(__('Bezahlen per Rechnung'), ['action' => 'invoice']) ?>
    <?php } ?>
</div>