<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property string $employee_name
 * @property string $position
 * @property string $nss
 * @property string|null $rfc
 * @property string $curp
 * @property float $base_salary
 * @property string $motion
 * @property \Cake\I18n\FrozenDate|null $date
 */
class Employee extends Entity
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
        'employee_name' => true,
        'position' => true,
        'nss' => true,
        'rfc' => true,
        'curp' => true,
        'base_salary' => true,
        'motion' => true,
        'date' => true,
    ];
}
