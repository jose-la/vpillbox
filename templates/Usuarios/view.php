<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Usuario'), ['action' => 'edit', $usuario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('¿Está seguro de que quiere eliminar # {0}?', $usuario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Añadir Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarios view content">
            <h3><?= h($usuario->nombre) ?> <?= h($usuario->apellidos) ?></h3><hr>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($usuario->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($usuario->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contrasena') ?></th>
                    <td><?= h($usuario->contrasena) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($usuario->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($usuario->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Pastillas Fk') ?></th>
                    <td><?= h($usuario->id_pastillas_fk) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imagen') ?></th>
                    <td><?= $this->Number->format($usuario->imagen) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
