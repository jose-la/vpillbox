<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asignacion[]|\Cake\Collection\CollectionInterface $asignacion
 */
?>
<div class="asignacion index content">
    <h3><?= __('Asignación') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('id_usuario') ?></th>
                    <th><?= $this->Paginator->sort('id_farmaco') ?></th>
                    <th><?= $this->Paginator->sort('tomas_al_dia') ?></th>
                    <th><?= $this->Paginator->sort('dias') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($asignacion as $asignacion): ?>
                <tr>
                    <td><?= $this->Number->format($asignacion->id) ?></td>
                    <td><?= $this->Number->format($asignacion->id_user) ?></td>
                    <td><?= $this->Number->format($asignacion->id_farmacos) ?></td>
                    <td><?= $this->Number->format($asignacion->tomas) ?></td>
                    <td><?= h($asignacion->dias) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $asignacion->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $asignacion->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $asignacion->id], ['confirm' => __('¿De verdad quiere borrar esta asignación {0}?', $asignacion->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div><br>
    <?php echo $this->Form->button ('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
    <?= $this->Html->link(__('Tutorial'), ['controller' => 'Tutorial', 'action' => 'tutorialindexasignacion'], ['class' => 'button float-right']) ?>
</div>
<br><br>
