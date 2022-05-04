<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pastilla $pastilla
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar Fármaco'),
                ['action' => 'delete', $pastilla->id_pastillas],
                ['confirm' => __('¿Está seguro de que quiere eliminar # {0}?', $pastilla->id_pastillas), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Fármacos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pastillas form content">
            <?= $this->Form->create($pastilla) ?>
            <fieldset>
                <h3><?= __('Editar Fármaco') ?></h3><hr>
                <img src="<?php echo $pastilla->imagen ?>" alt="">
                <?php
                    echo $this->Form->control('id_pastillas');
                    echo $this->Form->control('marca');
                    echo "<label>Tipo</label>";
                    echo $this->Form->select('tipo', [
                        'analgesicos' => 'Analgesicos',
                        'antiacidos' => 'Antiacidos',
                        'antialergicos' => 'Antialergicos',
                        'laxantes' => 'Laxantes',
                        'antiinfecciosos' => 'Antiinfecciosos',
                        'antiinflamatorios' => 'Antiinflamatorios'
                    ]);
                    echo $this->Form->control('color');
                    echo $this->Form->control('peso');
                    echo "<label>Observaciones</label>";
                    echo $this->Form->textarea('observaciones');
                    echo $this->Form->control('imagen');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Editar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
