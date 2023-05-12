<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VacationsFixture
 */
class VacationsFixture extends TestFixture
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
                'employees_id' => 1,
                'payrolls_id' => 1,
                'post' => 'Lorem ipsum d',
                'weekly_salary' => 1,
                'vacation_days' => 1,
                'date_admission' => '2023-05-10',
                'start_vacation' => '2023-05-10',
                'return_vacations' => '2023-05-10',
            ],
        ];
        parent::init();
    }
}
