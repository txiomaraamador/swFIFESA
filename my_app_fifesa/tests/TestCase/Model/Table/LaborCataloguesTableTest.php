<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LaborCataloguesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LaborCataloguesTable Test Case
 */
class LaborCataloguesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LaborCataloguesTable
     */
    protected $LaborCatalogues;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.LaborCatalogues',
        'app.Employees',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LaborCatalogues') ? [] : ['className' => LaborCataloguesTable::class];
        $this->LaborCatalogues = $this->getTableLocator()->get('LaborCatalogues', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->LaborCatalogues);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LaborCataloguesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\LaborCataloguesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
