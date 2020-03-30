<div class="column">
    <div class="row">
        <div class="side-nav">
            <h4 class="heading"><?= __('Käufer und Empfänger') ?></h4>
            <?= __('Hast du bereits einen Account?') ?>
            <?= $this->Html->link(__('Jetzt anmelden'), ['controller' => 'users', 'action' => 'login']) ?>
        </div>
    </div>
    <div class="row">
        <?php
        if ($user) { ?>
            <?= $this->element('edituser', ["user" => $user]) ?>
        <?php
        } else { ?>
            <?= $this->element('adduser') ?>
        <?php }
        ?>
    </div>
    <?= $this->Html->link(__('Bezahlen per Rechnung'), ['action' => 'invoice']) ?>
</div>