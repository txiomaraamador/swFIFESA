<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Settlement> $settlements
 */
?>
<div class="settlements index content">
    <?= $this->Html->link(__('Nuevo Finiquito'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Settlements') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('ID DEL EMPLEADO') ?></th>
                    <th><?= $this->Paginator->sort('ID DE VACACIONES') ?></th>
                    <th><?= $this->Paginator->sort('ID DE NÓMINA') ?></th>
                    <th><?= $this->Paginator->sort('MONTO DIARIO') ?></th>
                    <th><?= $this->Paginator->sort('DÍAS A LA FECHA') ?></th>
                    <th><?= $this->Paginator->sort('VACACIONES') ?></th>
                    <th class="actions"><?= __('OPCIONES') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($settlements as $settlement): ?>
                <tr>
                    <td><?= $this->Number->format($settlement->id) ?></td>
                    <td><?= $settlement->has('employee') ? $this->Html->link($settlement->employee->id, ['controller' => 'Employees', 'action' => 'view', $settlement->employee->id]) : '' ?></td>
                    <td><?= $settlement->has('vacation') ? $this->Html->link($settlement->vacation->Array, ['controller' => 'Vacations', 'action' => 'view', $settlement->vacation->id]) : '' ?></td>
                    <td><?= $settlement->has('payroll') ? $this->Html->link($settlement->payroll->Array, ['controller' => 'Payrolls', 'action' => 'view', $settlement->payroll->id]) : '' ?></td>
                    <td><?= $this->Number->format($settlement->daily_amount) ?></td>
                    <td><?= $this->Number->format($settlement->days_to_date) ?></td>
                    <td><?= $this->Number->format($settlement->vacations) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $settlement->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $settlement->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $settlement->id], ['confirm' => __('¿Está seguro que desea eliminar # {0}?', $settlement->id)]) ?>
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