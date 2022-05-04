<style>
    #divLogin {
        background: #ffffff;
        padding: 2rem;
        border-radius: 0.4rem;
        box-shadow: 0 7px 14px 0 rgb(60 66 87 / 10%), 0 3px 6px 0 rgb(0 0 0 / 7%);
        margin-bottom: 40px;
    }
</style>
<div id="divLogin" class="users form">
    <?= $this->Flash->render() ?>
    <h3>Log In</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <?= $this->Form->control('nombre', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>