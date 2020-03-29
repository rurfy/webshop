<!-- in /templates/Kunde/login.php -->
<div class="kunde form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('Benutzername', ['required' => true]) ?>
        <?= $this->Form->control('Passwort', ['required' => true, 'type'=> 'password']) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Add User", ['action' => 'add']) ?>
</div>