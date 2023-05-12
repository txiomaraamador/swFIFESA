<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Settlement $settlement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Nuevo Finiquito'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Editar Finiquito'), ['action' => 'edit', $settlement->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Finiquito'), ['action' => 'delete', $settlement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $settlement->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Finiquitos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="settlements view content">
            <h3><?= h($settlement->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Empleado') ?></th>
                    <td><?= $settlement->has('employee') ? $this->Html->link($settlement->employee->id, ['controller' => 'Employees', 'action' => 'view', $settlement->employee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id deVacaciones') ?></th>
                    <td><?= $settlement->has('vacation') ? $this->Html->link($settlement->vacation->id, ['controller' => 'Vacations', 'action' => 'view', $settlement->vacation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nómina') ?></th>
                    <td><?= $settlement->has('payroll') ? $this->Html->link($settlement->payroll->id, ['controller' => 'Payrolls', 'action' => 'view', $settlement->payroll->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($settlement->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monto Diario') ?></th>
                    <td><?= $this->Number->format($settlement->daily_amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Días a la Fecha') ?></th>
                    <td><?= $this->Number->format($settlement->days_to_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vacaciones') ?></th>
                    <td><?= $this->Number->format($settlement->vacations) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
