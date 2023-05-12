<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Settlement $settlement
 * @var string[]|\Cake\Collection\CollectionInterface $employees
 * @var string[]|\Cake\Collection\CollectionInterface $vacations
 * @var string[]|\Cake\Collection\CollectionInterface $payrolls
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Form->postLink(
                __('Eliminar Finiquito'),
                ['action' => 'delete', $settlement->id],
                ['confirm' => __('¿Está seguro que desea eliminar # {0}?', $settlement->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Finiquitos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="settlements form content">
            <?= $this->Form->create($settlement) ?>
            <fieldset>
                <legend><?= __('Editar Finiquito') ?></legend>
                <?php
                     echo $this->Form->control('employees_id', ['options' => $employees, 'label' => 'Empleado']);                    
                     echo $this->Form->control('vacations_id', ['options' => $vacations, 'label' => 'Vacaciones']);    
                     echo $this->Form->control('payrolls_id', ['options' => $payrolls, 'label' => 'Nóminas']);    
                     echo $this->Form->control('daily_amount',array('label' => 'Monto Diario'));
                     echo $this->Form->control('days_to_date',array('label' => 'Días a la Fecha'));
                     echo $this->Form->control('vacations',array('label' => 'Vacaciones'));
                ?>
            </fieldset>
            <?= $this->Form->button(__('Editar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
