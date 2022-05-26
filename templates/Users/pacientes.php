<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<style>
    .botonPacientes {
        margin-right: 10px;
    }
</style>
<?= $this->Html->link(__('Log Out'), ['action' => 'logout'], ['class' => 'button float-right']) ?>
<h3>Bienvenid@ <strong><?= $this->Identity->get('nombre'); ?> <?= $this->Identity->get('apellidos'); ?></strong></h3>
<div class="users index content">
    <h2><?= __('Pacientes') ?></h2>
    <div class="table-responsive">
        <?php foreach ($users as $user): ?>
            <div>
                <?= $this->Html->link(__(h($user->nombre) . " " . h($user->apellidos)), ['controller' => 'Calendar', 'action' => 'index', $user->id], ['class' => 'button botonPacientes']) ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
