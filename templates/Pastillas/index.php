<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pastilla[]|\Cake\Collection\CollectionInterface $pastillas
 */
?>
<style>
    .paginator {
        margin-top: 10px;
    }
</style>
<div class="pastillas index content">
    <?= $this->Html->link(__('Nuevo fármaco'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h2><?= __('Fármacos') ?></h2><hr>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_pastillas') ?></th>
                    <th><?= $this->Paginator->sort('marca') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('color') ?></th>
                    <th><?= $this->Paginator->sort('peso') ?></th>
                    <th><?= $this->Paginator->sort('observaciones') ?></th>
                    <th><?= $this->Paginator->sort('imagen') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pastillas as $pastilla): ?>
                <tr>
                    <td><?= h($pastilla->id_pastillas) ?></td>
                    <td><?= h($pastilla->marca) ?></td>
                    <td><?= h($pastilla->tipo) ?></td>
                    <td><?= h($pastilla->color) ?></td>
                    <td><?= h($pastilla->peso) ?></td>
                    <td><?= h($pastilla->observaciones) ?></td>
                    <td><img style="with: 100px; height: 100px;" src="<?php echo $pastilla->imagen ?>" alt=""></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $pastilla->id_pastillas]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $pastilla->id_pastillas]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $pastilla->id_pastillas], ['confirm' => __('¿Está seguro de que quiere eliminar # {0}?', $pastilla->id_pastillas)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} totales')) ?></p>
    </div>
    <?= $this->Html->link(__('Tutorial'), ['controller' => 'Tutorial', 'action' => 'tutorialindexpastillas'], ['class' => 'button']) ?>
</div>
<br><br>
