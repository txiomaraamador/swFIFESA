<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeesFixture
 */
class EmployeesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'employee_name' => 'Lorem ipsum dolor sit amet',
                'position' => 'Lorem ipsum dolor sit amet',
                'nss' => 'Lorem ips',
                'rfc' => 'Lorem ipsum',
                'curp' => 'Lorem ipsum dolo',
                'base_salary' => 1,
                'motion' => 'Lorem ipsum d',
                'date' => '2023-05-10',
            ],
        ];
        parent::init();
    }
}
