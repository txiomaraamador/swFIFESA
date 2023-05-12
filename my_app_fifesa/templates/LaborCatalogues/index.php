<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\LaborCatalogue> $laborCatalogues
 */
?>
<div class="laborCatalogues index content">
    <?= $this->Html->link(__('Nuevo Catálogo de Vacaciones'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Catálogo de Vacaciones') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('ID DEL EMPLEADO') ?></th>
                    <th><?= $this->Paginator->sort('FECHA DE INICIO') ?></th>
                    <th><?= $this->Paginator->sort('AÑOS TRABAJANDO') ?></th>
                    <th><?= $this->Paginator->sort('VACACIONES') ?></th>
                    <th class="actions"><?= __('OPCIONES') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($laborCatalogues as $laborCatalogue): ?>
                <tr>
                    <td><?= $this->Number->format($laborCatalogue->id) ?></td>
                    <td><?= $laborCatalogue->has('employee') ? $this->Html->link($laborCatalogue->employee->id, ['controller' => 'Employees', 'action' => 'view', $laborCatalogue->employee->id]) : '' ?></td>
                    <td><?= h($laborCatalogue->date_hire) ?></td>
                    <td><?= $this->Number->format($laborCatalogue->years_working) ?></td>
                    <td><?= $this->Number->format($laborCatalogue->holidays) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $laborCatalogue->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $laborCatalogue->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $laborCatalogue->id], ['confirm' => __('¿Está seguro que desea eliminar # {0}?', $laborCatalogue->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('Atrás')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
    </div>
</div>
