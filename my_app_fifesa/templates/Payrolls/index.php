<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Payroll> $payrolls
 */
?>
<div class="payrolls index content">
    <?= $this->Html->link(__('Nueva Nómina'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Nóminas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('ID DEL EMPLEADO') ?></th>
                    <th><?= $this->Paginator->sort('SALARIO') ?></th>
                    <th><?= $this->Paginator->sort('BONO') ?></th>
                    <th><?= $this->Paginator->sort('DÍAS TRABAJADOS') ?></th>
                    <th><?= $this->Paginator->sort('FALTAS') ?></th>
                    <th><?= $this->Paginator->sort('EXTRA') ?></th>
                    <th><?= $this->Paginator->sort('DESCANSO') ?></th>
                    <th><?= $this->Paginator->sort('PRODUCTION') ?></th>
                    <th><?= $this->Paginator->sort('IRS') ?></th>
                    <th class="actions"><?= __('OPCIONES') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payrolls as $payroll): ?>
                <tr>
                    <td><?= $this->Number->format($payroll->id) ?></td>
                    <td><?= $payroll->has('employee') ? $this->Html->link($payroll->employee->id, ['controller' => 'Employees', 'action' => 'view', $payroll->employee->id]) : '' ?></td>
                    <td><?= $this->Number->format($payroll->salary) ?></td>
                    <td><?= $this->Number->format($payroll->bond) ?></td>
                    <td><?= $this->Number->format($payroll->business_days) ?></td>
                    <td><?= $this->Number->format($payroll->faults) ?></td>
                    <td><?= $this->Number->format($payroll->extra) ?></td>
                    <td><?= $this->Number->format($payroll->rest) ?></td>
                    <td><?= $this->Number->format($payroll->production) ?></td>
                    <td><?= $this->Number->format($payroll->irs) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $payroll->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $payroll->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $payroll->id], ['confirm' => __('¿Está seguro que desea eliminar # {0}?', $payroll->id)]) ?>
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
