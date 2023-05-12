<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Vacation> $vacations
 */
?>
<div class="vacations index content">
    <?= $this->Html->link(__('Nueva Vacación'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vacaciones') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('ID DEL EMPLEADO') ?></th>
                    <th><?= $this->Paginator->sort('ID DE LA NÓMINA') ?></th>
                    <th><?= $this->Paginator->sort('PUESTO') ?></th>
                    <th><?= $this->Paginator->sort('SALARIO SEMANAL') ?></th>
                    <th><?= $this->Paginator->sort('DÍAS DE VACACIONES') ?></th>
                    <th><?= $this->Paginator->sort('FECHA DE CONTRATACIÓN') ?></th>
                    <th><?= $this->Paginator->sort('FECHA DE INICIO') ?></th>
                    <th><?= $this->Paginator->sort('FECHA DE REGRESO') ?></th>
                    <th class="actions"><?= __('OPCIONES') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vacations as $vacation): ?>
                <tr>
                    <td><?= $this->Number->format($vacation->id) ?></td>
                    <td><?= $vacation->has('employee') ? $this->Html->link($vacation->employee->id, ['controller' => 'Employees', 'action' => 'view', $vacation->employee->id]) : '' ?></td>
                    <td><?= $vacation->has('payroll') ? $this->Html->link($vacation->payroll->id, ['controller' => 'Payrolls', 'action' => 'view', $vacation->payroll->id]) : '' ?></td>
                    <td><?= h($vacation->post) ?></td>
                    <td><?= $this->Number->format($vacation->weekly_salary) ?></td>
                    <td><?= $this->Number->format($vacation->vacation_days) ?></td>
                    <td><?= h($vacation->date_admission) ?></td>
                    <td><?= h($vacation->start_vacation) ?></td>
                    <td><?= h($vacation->return_vacations) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $vacation->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $vacation->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $vacation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vacation->id)]) ?>
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
