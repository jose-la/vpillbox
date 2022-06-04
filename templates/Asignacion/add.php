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
            <?= $this->Html->link(__('Ver asignaciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="asignacion form content">
            <?= $this->Form->create($asignacion) ?>
            <fieldset>
                <legend><?= __('Crear Asignación') ?></legend>
                <?php
                    echo "<label>Usuario</label>";
                    // HACER QUE SEA DISABLED, PARA QUE NO SE PUEDA MODIFICAR
                    // echo $this->Form->text('id_user', ['value' => $idUsuario]);
                    echo $this->Form->control('id_user', ['value' => $idUsuario]);

                    echo "<label>Fármaco</label>";
                    $arrayFarmacos = [];
                    foreach ($farmacosCompletos as $farmaco) {
                        $arrayFarmacos += [h($farmaco->id_pastillas) => h($farmaco->marca) . ", " . h($farmaco->peso)];
                    }
                    echo $this->Form->select('id_farmacos', $arrayFarmacos);
                    echo "<label>Días</label>";
                    echo $this->Form->select('dias', [
                        'l' => 'Lunes',
                        'm' => 'Martes',
                        'x' => 'Miércoles',
                        'j' => 'Jueves',
                        'v' => 'Viernes',
                        's' => 'Sábado',
                        'd' => 'Domingo'
                    ]);
                    echo "<label>Tomas al Día</label>";
                    echo $this->Form->select('tomas', [
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                        '7' => '7',
                        '8' => '8',
                        '9' => '9'
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Asignar')) ?>
            <?= $this->Form->end() ?>
            <?php echo $this->Form->button('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
        </div>
    </div>
</div>
