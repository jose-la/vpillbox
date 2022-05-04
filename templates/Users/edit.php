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
                    echo $this->Form->control('telefono');
                    echo "<label>Role</label>";
                    echo $this->Form->select('role', [
                        'usuario' => 'Usuario',
                        'medico' => 'Medico',
                    ]);
                    echo "-----------------------------------------------------------------------------------------------------------";
                    echo $this->Form->create($document, ['enctype' => 'multipart/form-data']);
                    echo $this->Form->file('submittedfile');

                    function beforeMarshal(\Cake\Event\EventInterface $event, \ArrayObject $data, \ArrayObject $options)
                    {
                        if ($data['submittedfile'] === '') {
                            unset($data['submittedfile']);
                        }
                    }
                    $fileobject = $this->request->getData('submittedfile');
                    $destination = UPLOAD_DIRECTORY . $fileobject->getClientFilename();

                    // Existing files with the same name will be replaced.
                    $fileobject->moveTo($destination);

                    /* echo "<label>Imagen</label>";
                    echo $this->Form->file('imagen'); */
                    /* {{ asset('\img\usuarios\' . $user->imagen) }} */
                ?>
            </fieldset>
            <?= $this->Form->button(__('Editar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
