<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Employee> $employees
 */
?>
<div class="employees index content">
    <?= $this->Html->link(__('Nuevo Empleado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empleados') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('NOMBRE') ?></th>
                    <th><?= $this->Paginator->sort('PUESTO') ?></th>
                    <th><?= $this->Paginator->sort('NÚMERO DE SEGURO SOCIAL') ?></th>
                    <th><?= $this->Paginator->sort('RFC') ?></th>
                    <th><?= $this->Paginator->sort('CURP') ?></th>
                    <th><?= $this->Paginator->sort('SALARIO BASE') ?></th>
                    <th><?= $this->Paginator->sort('MOVIMIENTO') ?></th>
                    <th><?= $this->Paginator->sort('FECHA DE CONTRATACIÓN') ?></th>
                    <th class="actions"><?= __('OPCIONES') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $this->Number->format($employee->id) ?></td>
                    <td><?= h($employee->employee_name) ?></td>
                    <td><?= h($employee->position) ?></td>
                    <td><?= h($employee->nss) ?></td>
                    <td><?= h($employee->rfc) ?></td>
                    <td><?= h($employee->curp) ?></td>
                    <td><?= $this->Number->format($employee->base_salary) ?></td>
                    <td><?= h($employee->motion) ?></td>
                    <td><?= h($employee->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $employee->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $employee->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $employee->id], ['confirm' => __('¿Está seguro que desea eliminar # {0}?', $employee->id)]) ?>
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
