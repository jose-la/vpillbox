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
                    echo $this->Form->text('id_user', ['value' => $idUsuario, 'disabled']);

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
            <?= $this->Form->button(__('Asignar')) ?>
            <?= $this->Form->end() ?>
            <?= $this->Html->link(__('Tutorial'), ['controller' => 'Tutorial', 'action' => 'tutorialaddasignacion'], ['class' => 'button  float-right']) ?>
            <?php echo $this->Form->button('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
        </div>
    </div>
</div>
<br><br>
