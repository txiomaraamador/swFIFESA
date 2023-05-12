<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LaborCatalogue $laborCatalogue
 * @var \Cake\Collection\CollectionInterface|string[] $employees
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Lista del Catálogo de Vacaciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="laborCatalogues form content">
            <?= $this->Form->create($laborCatalogue) ?>
            <fieldset>
                <legend><?= __('Añadir Catálogo de Vacaciones') ?></legend>
                <?php
                    echo $this->Form->control('employees_id', ['options' => $employees, 'label' => 'Empleado']);                    
                    echo $this->Form->control('date_hire' ,array('label' => 'Fecha de Inicio'));
                    echo $this->Form->control('years_working' ,array('label' => 'Años Trabajando'));
                    echo $this->Form->control('holidays' ,array('label' => 'Vacaciones'));
                ?>
            </fieldset>
            <?= $this->Form->button(__('Añadir')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
