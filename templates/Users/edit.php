<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar Usuario'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('¿Está seguro de que quiere eliminar {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Editar Usuario') ?></legend>
                <img src="<?php echo $user->imagen ?>" alt="">
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
                        'medico' => 'Medico',
                    ]);
                    echo "<label>Médico Asignado</label>";
                    $arrayMedico = [];
                    foreach ($medicoAsignado as $medico) {
                        $arrayMedico += [h($medico->id) => h($medico->nombre) . " " . h($medico->apellidos)];
                    }
                    echo $this->Form->select('medico_asignado', $arrayMedico); 
                    
                    echo "<label>Imagen</label>";
                    echo $this->Form->file('imagen');

                    // $uploadPath ='/img/usuarios/';
                    // $files = scandir($uploadPath, 0);

                    
                    // echo "-----------------------------------------------------------------------------------------------------------";
                    // echo $this->Form->create($document, ['enctype' => 'multipart/form-data']);
                    // echo $this->Form->file('submittedfile');

                    // function beforeMarshal(\Cake\Event\EventInterface $event, \ArrayObject $data, \ArrayObject $options)
                    // {
                    //     if ($data['submittedfile'] === '') {
                    //         unset($data['submittedfile']);
                    //     }
                    // }
                    // $fileobject = $this->request->getData('submittedfile');
                    // $destination = UPLOAD_DIRECTORY . $fileobject->getClientFilename();

                    // // Existing files with the same name will be replaced.
                    // $fileobject->moveTo($destination);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Editar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
