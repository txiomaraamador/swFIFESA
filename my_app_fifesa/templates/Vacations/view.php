<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vacation $vacation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Nueva Vacación'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Editar Vacación'), ['action' => 'edit', $vacation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Vacación'), ['action' => 'delete', $vacation->id], ['confirm' => __('¿Está seguro que desea eliminar # {0}?', $vacation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de  Vacaciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vacations view content">
            <h3><?= h($vacation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Empleado') ?></th>
                    <td><?= $vacation->has('employee') ? $this->Html->link($vacation->employee->id, ['controller' => 'Employees', 'action' => 'view', $vacation->employee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nómina') ?></th>
                    <td><?= $vacation->has('payroll') ? $this->Html->link($vacation->payroll->id, ['controller' => 'Payrolls', 'action' => 'view', $vacation->payroll->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Puesto') ?></th>
                    <td><?= h($vacation->post) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vacation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salario Semanal') ?></th>
                    <td><?= $this->Number->format($vacation->weekly_salary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Días de Vacaciones') ?></th>
                    <td><?= $this->Number->format($vacation->vacation_days) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha de Contratación') ?></th>
                    <td><?= h($vacation->date_admission) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha de Inicio') ?></th>
                    <td><?= h($vacation->start_vacation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha de Regreso') ?></th>
                    <td><?= h($vacation->return_vacations) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
