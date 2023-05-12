<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vacation $vacation
 * @var \Cake\Collection\CollectionInterface|string[] $employees
 * @var \Cake\Collection\CollectionInterface|string[] $payrolls
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Lista de Vacaciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vacations form content">
            <?= $this->Form->create($vacation) ?>
            <fieldset>
                <legend><?= __('Añadir Vacación') ?></legend>
                <?php
                    echo $this->Form->control('employees_id', ['options' => $employees, 'label' => 'Empleado']);                    
                    echo $this->Form->control('payrolls_id', ['options' => $payrolls, 'label' => 'Id de Nómina']);   
                    echo $this->Form->control('post',array('label' => 'Puesto'));
                    echo $this->Form->control('weekly_salary' ,array('label' => 'Salario Semanal'));
                    echo $this->Form->control('vacation_days',array('label' => 'Días de Vacaciones'));
                    echo $this->Form->control('date_admission', ['empty' => true,'label' => 'Fecha de Contratación']);
                    echo $this->Form->control('start_vacation', ['empty' => true,'label' => 'Fecha de Inicio']);
                    echo $this->Form->control('return_vacations', ['empty' => true ,'label' => 'Fecha de Regreso']);
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Añadir')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
