<!-- in /templates/Users/login.php -->
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Bitte Benutzername und Passwort eingeben') ?></legend>
        <?= $this->Form->control('Benutzername', ['required' => true]) ?>
        <?= $this->Form->control('Passwort', ['required' => true, 'type' => 'password']) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>

    <style>
        a.button {
            background-color: #333;
            border: 0.1rem solid #333;
            border-radius: .4rem;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 1.1rem;
            font-weight: 700;
            height: 3.8rem;
            letter-spacing: .1rem;
            line-height: 3.8rem;
            padding: 0 3.0rem;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            white-space: nowrap;
        }
    </style>

    <?= $this->Html->link("Registrieren", ['action' => 'add'], ['class' => 'button']) ?>
</div>