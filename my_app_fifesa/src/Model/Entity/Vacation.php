<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vacation Entity
 *
 * @property int $id
 * @property int $employees_id
 * @property int $payrolls_id
 * @property string $post
 * @property float $weekly_salary
 * @property int $vacation_days
 * @property \Cake\I18n\FrozenDate|null $date_admission
 * @property \Cake\I18n\FrozenDate|null $start_vacation
 * @property \Cake\I18n\FrozenDate|null $return_vacations
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\Payroll $payroll
 */
class Vacation extends Entity
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
        'payrolls_id' => true,
        'post' => true,
        'weekly_salary' => true,
        'vacation_days' => true,
        'date_admission' => true,
        'start_vacation' => true,
        'return_vacations' => true,
        'employee' => true,
        'payroll' => true,
    ];
}
