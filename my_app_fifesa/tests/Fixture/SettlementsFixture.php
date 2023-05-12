<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SettlementsFixture
 */
class SettlementsFixture extends TestFixture
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
                'vacations_id' => 1,
                'payrolls_id' => 1,
                'daily_amount' => 1,
                'days_to_date' => 1,
                'vacations' => 1,
            ],
        ];
        parent::init();
    }
}
