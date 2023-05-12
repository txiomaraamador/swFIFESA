<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payroll Entity
 *
 * @property int $id
 * @property int $employees_id
 * @property float $salary
 * @property float $bond
 * @property int $business_days
 * @property int $faults
 * @property float $extra
 * @property int $rest
 * @property float $production
 * @property float $irs
 *
 * @property \App\Model\Entity\Employee $employee
 */
class Payroll extends Entity
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
        'salary' => true,
        'bond' => true,
        'business_days' => true,
        'faults' => true,
        'extra' => true,
        'rest' => true,
        'production' => true,
        'irs' => true,
        'employee' => true,
    ];
}
