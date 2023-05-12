<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LaborCatalogue $laborCatalogue
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Nuevo Catálogo de Vacaciones'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Editar Catálogo de Vacaciones'), ['action' => 'edit', $laborCatalogue->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Catálogo de Vacaciones'), ['action' => 'delete', $laborCatalogue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $laborCatalogue->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista del Catálogo de Vacaciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="laborCatalogues view content">
            <h3><?= h($laborCatalogue->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Empleado') ?></th>
                    <td><?= $laborCatalogue->has('employee') ? $this->Html->link($laborCatalogue->employee->id, ['controller' => 'Employees', 'action' => 'view', $laborCatalogue->employee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($laborCatalogue->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Años Trabajando') ?></th>
                    <td><?= $this->Number->format($laborCatalogue->years_working) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vacaciones') ?></th>
                    <td><?= $this->Number->format($laborCatalogue->holidays) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha de Inicio') ?></th>
                    <td><?= h($laborCatalogue->date_hire) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
