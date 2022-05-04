<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
/**
 * @var \App\Model\Entity\Pastilla $pastilla
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Listar Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarios form content">
            <?= $this->Form->create($usuario) ?>
            <fieldset>
                <h3><?= __('Añadir Usuario') ?></h3><hr>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidos');
                    echo $this->Form->control('contrasena');
                    echo $this->Form->control('numero', ['label' => 'Teléfono']);
                    echo "<label>Tipo</label>";
                    echo $this->Form->select('tipo', [
                        'usuario' => 'Usuario',
                        'medico' => 'Médico',
                    ]);
                    echo $this->Form->control('id_pastillas_fk', ['label' => 'Id Fármaco']);
                    echo $this->Form->control('imagen');
                    // echo $this->Form->control('name', ['label' => false]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Añadir')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
