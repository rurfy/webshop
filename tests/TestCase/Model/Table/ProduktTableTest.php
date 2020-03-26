<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProduktTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProduktTable Test Case
 */
class ProduktTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProduktTable
     */
    protected $Produkt;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Produkt',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Produkt') ? [] : ['className' => ProduktTable::class];
        $this->Produkt = TableRegistry::getTableLocator()->get('Produkt', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Produkt);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
