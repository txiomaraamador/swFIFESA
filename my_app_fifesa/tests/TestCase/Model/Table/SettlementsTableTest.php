<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SettlementsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SettlementsTable Test Case
 */
class SettlementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SettlementsTable
     */
    protected $Settlements;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Settlements',
        'app.Employees',
        'app.Vacations',
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
        $config = $this->getTableLocator()->exists('Settlements') ? [] : ['className' => SettlementsTable::class];
        $this->Settlements = $this->getTableLocator()->get('Settlements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Settlements);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SettlementsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SettlementsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
