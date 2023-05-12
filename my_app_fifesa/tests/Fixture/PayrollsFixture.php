<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PayrollsFixture
 */
class PayrollsFixture extends TestFixture
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
                'salary' => 1,
                'bond' => 1,
                'business_days' => 1,
                'faults' => 1,
                'extra' => 1,
                'rest' => 1,
                'production' => 1,
                'irs' => 1,
            ],
        ];
        parent::init();
    }
}
