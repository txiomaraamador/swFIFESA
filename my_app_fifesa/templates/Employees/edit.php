<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Form->postLink(
                __('Eliminar Empleado'),
                ['action' => 'delete', $employee->id],
                ['confirm' => __('¿Está seguro que desea eliminar # {0}?', $employee->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Empleados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees form content">
            <?= $this->Form->create($employee) ?>
            <fieldset>
                <legend><?= __('Editar Empleado') ?></legend>
                <?php
                   echo $this->Form->control('employee_name',array('label' => 'Nombre'));
                   echo $this->Form->control('position',array('label' => 'Puesto'));
                   echo $this->Form->control('nss',array('label' => 'Número de Seguro Social'));
                   echo $this->Form->control('rfc',array('label' => 'RFC'));
                   echo $this->Form->control('curp',array('label' => 'CURP'));
                   echo $this->Form->control('base_salary',array('label' => 'Salario Base'));
                   echo $this->Form->control('motion',array('label' => 'Movimiento'));
                   echo $this->Form->control('date', ['empty' => true,'label' => 'Fecha de Contratación']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
