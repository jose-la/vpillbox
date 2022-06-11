<?= $this->Html->css('login') ?>
<div id="divLogin" class="users form">
    <?= $this->Flash->render() ?>
    <h3>Log In</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <?= $this->Form->control('num_ss', ['required' => true, 'label' => 'Número Seguridad Social']) ?>
        <?= $this->Form->control('password', ['required' => true, 'label' => 'Contraseña']) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>