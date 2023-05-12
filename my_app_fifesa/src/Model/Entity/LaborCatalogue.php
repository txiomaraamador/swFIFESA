<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LaborCatalogue Entity
 *
 * @property int $id
 * @property int $employees_id
 * @property \Cake\I18n\FrozenDate $date_hire
 * @property int $years_working
 * @property int $holidays
 *
 * @property \App\Model\Entity\Employee $employee
 */
class LaborCatalogue extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'employees_id' => true,
        'date_hire' => true,
        'years_working' => true,
        'holidays' => true,
        'employee' => true,
    ];
}
