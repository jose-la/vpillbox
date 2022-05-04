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
            <?= $this->Form->postLink(
                __('Eliminar Usuario'),
                ['action' => 'delete', $usuario->id],
                ['confirm' => __('¿Está seguro de que quiere eliminar # {0}?', $usuario->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarios form content">
            <?= $this->Form->create($usuario) ?>
            <fieldset>
                <h3><?= __('Editar Usuario') ?></h3><hr>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidos');
                    echo $this->Form->control('contrasena');
                    echo $this->Form->control('numero');
                    echo "<label>Tipo</label>";
                    echo $this->Form->select('tipo', [
                        'usuario' => 'Usuario',
                        'medico' => 'Médico',
                    ]);
                    echo $this->Form->control('id_pastillas_fk');
                    echo $this->Form->control('imagen');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Editar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
