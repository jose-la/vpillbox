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
            <?= $this->Html->link(__('Editar Fármaco'), ['action' => 'edit', $pastilla->id_pastillas], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Fármaco'), ['action' => 'delete', $pastilla->id_pastillas], ['confirm' => __('¿Está seguro de que quiere eliminar # {0}?', $pastilla->id_pastillas), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Fármacos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Fármaco'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pastillas view content">
            <h3><?= h($pastilla->marca) ?> de <?= h($pastilla->peso) ?></h3><hr>
            <img src="<?php echo $pastilla->imagen ?>" alt="">
            <table>
                <tr>
                    <th><?= __('ID Pastillas') ?></th>
                    <td><?= h($pastilla->id_pastillas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= h($pastilla->marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($pastilla->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Color') ?></th>
                    <td><?= h($pastilla->color) ?></td>
                </tr>
                <tr>
                    <th><?= __('Peso') ?></th>
                    <td><?= h($pastilla->peso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Observaciones') ?></th>
                    <td><?= h($pastilla->observaciones) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
