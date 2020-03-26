<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BestelldetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BestelldetailsTable Test Case
 */
class BestelldetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BestelldetailsTable
     */
    protected $Bestelldetails;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Bestelldetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Bestelldetails') ? [] : ['className' => BestelldetailsTable::class];
        $this->Bestelldetails = TableRegistry::getTableLocator()->get('Bestelldetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Bestelldetails);

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
