<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuarios
 */
?>
<style>
    .paginator {
        margin-top: 10px;
    }
</style>
<div class="usuarios index content">
    <?= $this->Html->link(__('Añadir Usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h2><?= __('Usuarios') ?></h2><hr>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellidos') ?></th>
                    <th><?= $this->Paginator->sort('contrasena') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('id_farmaco') ?></th>
                    <th><?= $this->Paginator->sort('imagen') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                    <td><?= h($usuario->nombre) ?></td>
                    <td><?= h($usuario->apellidos) ?></td>
                    <td><?= h($usuario->contrasena) ?></td>
                    <td><?= h($usuario->numero) ?></td>
                    <td><?= h($usuario->tipo) ?></td>
                    <td><?= h($usuario->id_pastillas_fk) ?></td>
                    <td><?= h($usuario->imagen) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $usuario->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuario->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $usuario->id], ['confirm' => __('¿Está seguro de que quiere eliminar # {0}?', $usuario->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} totales')) ?></p>
    </div>
</div>
