<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LaborCataloguesFixture
 */
class LaborCataloguesFixture extends TestFixture
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
                'date_hire' => '2023-05-10',
                'years_working' => 1,
                'holidays' => 1,
            ],
        ];
        parent::init();
    }
}
