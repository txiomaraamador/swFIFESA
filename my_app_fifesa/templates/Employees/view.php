<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Nuevo Empleado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Editar Empleado'), ['action' => 'edit', $employee->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Empleado'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Empleados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees view content">
            <h3><?= h($employee->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($employee->employee_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Puesto') ?></th>
                    <td><?= h($employee->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Número de Seguro Social') ?></th>
                    <td><?= h($employee->nss) ?></td>
                </tr>
                <tr>
                    <th><?= __('RFC') ?></th>
                    <td><?= h($employee->rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('CURP') ?></th>
                    <td><?= h($employee->curp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Movimiento') ?></th>
                    <td><?= h($employee->motion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($employee->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salario Base') ?></th>
                    <td><?= $this->Number->format($employee->base_salary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha de Contratación') ?></th>
                    <td><?= h($employee->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
