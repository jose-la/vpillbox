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
            <?= $this->Html->link(__('Editar Asignacion'), ['action' => 'edit', $asignacion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Asignacion'), ['action' => 'delete', $asignacion->id], ['confirm' => __('¿De verdad quiere borrar esta asignación {0}?', $asignacion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Asignaciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nueva Asignacion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="asignacion view content">
            <h3><?= h($asignacion->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($asignacion->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($asignacion->id_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Farmacos') ?></th>
                    <td><?= $this->Number->format($asignacion->id_farmacos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tomas') ?></th>
                    <td><?= $this->Number->format($asignacion->tomas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dias') ?></th>
                    <td><?= h($asignacion->dias) ?></td>
                </tr>
            </table><br>
            <?php echo $this->Form->button ('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
        </div>
    </div>
</div>
