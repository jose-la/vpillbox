<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
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
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <h3><?= __('Nuevo Usuario') ?></h3><hr>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidos');
                    echo $this->Form->control('password');
                    echo "<label>Número Seguridad Social</label>";
                    echo $this->Form->text('num_ss', array( 'type' => 'number' ));
                    echo $this->Form->control('telefono', ['label' => 'Teléfono']);
                    echo "<label>Role</label>";
                    echo $this->Form->select('role', [
                        'usuario' => 'Usuario',
                        'medico' => 'Médico',
                    ]);
                    echo "<label>Médico Asignado</label>";
                    $arrayMedico = [];
                    foreach ($medicoAsignado as $medico) {
                        $arrayMedico += [h($medico->id) => h($medico->nombre) . " " . h($medico->apellidos)];
                    }
                    echo $this->Form->select('medico_asignado', $arrayMedico); 

                    // echo $this->Form->control('imagen',array('placeholder' => '\img\usuarios\[id]_[primera_letra_nombre][apellido].jpg'));
                    echo "<label>Imagen</label>";
                    echo $this->Form->file('imagen');
                ?>
                <?php
                    // echo $this->Form->create($entity, ['type' => 'file']); // Dont miss this out or no files will upload
                ?>
            </fieldset>
            <?= $this->Form->button(__('Crear')) ?>
            <?= $this->Html->link(__('Tutorial'), ['controller' => 'Tutorial', 'action' => 'tutorialaddusers'], ['class' => 'button  float-right']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<br><br>
