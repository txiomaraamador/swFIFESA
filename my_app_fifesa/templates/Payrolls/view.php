<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payroll $payroll
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Nueva Nómina'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>    
            <?= $this->Html->link(__('Editar Nómina'), ['action' => 'edit', $payroll->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Nómina'), ['action' => 'delete', $payroll->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payroll->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Nóminas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="payrolls view content">
            <h3><?= h($payroll->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Empleado') ?></th>
                    <td><?= $payroll->has('employee') ? $this->Html->link($payroll->employee->id, ['controller' => 'Employees', 'action' => 'view', $payroll->employee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($payroll->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salario') ?></th>
                    <td><?= $this->Number->format($payroll->salary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bono') ?></th>
                    <td><?= $this->Number->format($payroll->bond) ?></td>
                </tr>
                <tr>
                    <th><?= __('Días Trabajados') ?></th>
                    <td><?= $this->Number->format($payroll->business_days) ?></td>
                </tr>
                <tr>
                    <th><?= __('Faltas') ?></th>
                    <td><?= $this->Number->format($payroll->faults) ?></td>
                </tr>
                <tr>
                    <th><?= __('Extra') ?></th>
                    <td><?= $this->Number->format($payroll->extra) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descanso') ?></th>
                    <td><?= $this->Number->format($payroll->rest) ?></td>
                </tr>
                <tr>
                    <th><?= __('Producción') ?></th>
                    <td><?= $this->Number->format($payroll->production) ?></td>
                </tr>
                <tr>
                    <th><?= __('IRS') ?></th>
                    <td><?= $this->Number->format($payroll->irs) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
