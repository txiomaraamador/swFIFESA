<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Settlement $settlement
 * @var \Cake\Collection\CollectionInterface|string[] $employees
 * @var \Cake\Collection\CollectionInterface|string[] $vacations
 * @var \Cake\Collection\CollectionInterface|string[] $payrolls
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Lista de Finiquitos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="settlements form content">
            <?= $this->Form->create($settlement) ?>
            <fieldset>
                <legend><?= __('Añadir Finiquito') ?></legend>
                <?php
                    echo $this->Form->control('employees_id', ['options' => $employees, 'label' => 'Empleado']);                    
                    echo $this->Form->control('vacations_id', ['options' => $vacations, 'label' => 'Vacaciones']);    
                    echo $this->Form->control('payrolls_id', ['options' => $payrolls, 'label' => 'Nóminas']);    
                    echo $this->Form->control('daily_amount',array('label' => 'Monto Diario'));
                    echo $this->Form->control('days_to_date',array('label' => 'Días a la Fecha'));
                    echo $this->Form->control('vacations',array('label' => 'Vacaciones'));
                ?>
            </fieldset>
            <?= $this->Form->button(__('Añadir')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
