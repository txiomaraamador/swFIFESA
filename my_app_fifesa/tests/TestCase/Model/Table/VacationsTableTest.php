<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VacationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VacationsTable Test Case
 */
class VacationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VacationsTable
     */
    protected $Vacations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Vacations',
        'app.Employees',
        'app.Payrolls',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Vacations') ? [] : ['className' => VacationsTable::class];
        $this->Vacations = $this->getTableLocator()->get('Vacations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Vacations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VacationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\VacationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
