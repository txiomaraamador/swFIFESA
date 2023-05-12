<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LaborCatalogue $laborCatalogue
 * @var string[]|\Cake\Collection\CollectionInterface $employees
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $laborCatalogue->id],
                ['confirm' => __('¿Está seguro que desea eliminar # {0}?', $laborCatalogue->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista del Catálogo de Vacaciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="laborCatalogues form content">
            <?= $this->Form->create($laborCatalogue) ?>
            <fieldset>
                <legend><?= __('Editar Catálogo de Vacaciones') ?></legend>
                <?php
                     echo $this->Form->control('employees_id', ['options' => $employees, 'label' => 'Empleado']);                    
                     echo $this->Form->control('date_hire' ,array('label' => 'Fecha de Inicio'));
                     echo $this->Form->control('years_working' ,array('label' => 'Años Trabajando'));
                     echo $this->Form->control('holidays' ,array('label' => 'Vacaciones'));
                ?>
            </fieldset>
            <?= $this->Form->button(__('Editar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
