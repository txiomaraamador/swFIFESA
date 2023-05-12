<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payroll $payroll
 * @var \Cake\Collection\CollectionInterface|string[] $employees
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Lista de Nóminas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="payrolls form content">
            <?= $this->Form->create($payroll) ?>
            <fieldset>
                <legend><?= __('Añadr Nómina') ?></legend>
                <?php
                    echo $this->Form->control('employees_id', ['options' => $employees, 'label' => 'Empleado']);                    
                    echo $this->Form->control('salary',array('label' => 'Salario'));
                    echo $this->Form->control('bond',array('label' => 'Bono'));
                    echo $this->Form->control('business_days' ,array('label' => 'Días Trabajados'));
                    echo $this->Form->control('faults' ,array('label' => 'Faltas'));
                    echo $this->Form->control('extra' ,array('label' => 'Extra'));
                    echo $this->Form->control('rest' ,array('label' => 'Descanso'));
                    echo $this->Form->control('production' ,array('label' => 'Producción'));
                    echo $this->Form->control('irs' ,array('label' => 'IRS'));
                ?>
            </fieldset>
            <?= $this->Form->button(__('Añadir')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
