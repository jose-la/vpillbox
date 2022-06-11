<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asignacion $asignacion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $asignacion->id],
                ['confirm' => __('¿De verdad quiere borrar esta asignación {0}?', $asignacion->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Asignaciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="asignacion form content">
            <?= $this->Form->create($asignacion) ?>
            <fieldset>
                <legend><?= __('Editar Asignacion') ?></legend>
                <?php
                    echo $this->Form->control('id_user', ['disabled']);

                    echo "<label>Fármaco</label>";
                    $arrayFarmacos = [];
                    foreach ($farmacosCompletos as $farmaco) {
                        $arrayFarmacos += [h($farmaco->id_pastillas) => h($farmaco->marca) . ", " . h($farmaco->peso)];
                    }
                    echo $this->Form->select('id_farmacos', $arrayFarmacos);

                    echo "<label>Días</label>";
                    echo $this->Form->select('dias', [
                        'lunes' => 'Lunes',
                        'martes' => 'Martes',
                        'miercoles' => 'Miércoles',
                        'jueves' => 'Jueves',
                        'viernes' => 'Viernes',
                        'sabado' => 'Sábado',
                        'domingo' => 'Domingo'
                    ]);
                    echo "<label>Tomas al Día</label>";
                    echo $this->Form->select('tomas', [
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6'
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Editar')) ?>
            <?= $this->Form->end() ?>
            <?php echo $this->Form->button('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
            <?= $this->Html->link(__('Tutorial'), ['controller' => 'Tutorial', 'action' => 'tutorialeditasignacion'], ['class' => 'button  float-right']) ?>
        </div>
    </div>
</div>
<br><br>
