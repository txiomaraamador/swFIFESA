<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Settlement Entity
 *
 * @property int $id
 * @property int $employees_id
 * @property int $vacations_id
 * @property int $payrolls_id
 * @property float $daily_amount
 * @property int $days_to_date
 * @property float $vacations
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\Vacation $vacation
 * @property \App\Model\Entity\Payroll $payroll
 */
class Settlement extends Entity
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
        'vacations_id' => true,
        'payrolls_id' => true,
        'daily_amount' => true,
        'days_to_date' => true,
        'vacations' => true,
        'employee' => true,
        'vacation' => true,
        'payroll' => true,
    ];
}
