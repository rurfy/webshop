<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BestellungTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BestellungTable Test Case
 */
class BestellungTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BestellungTable
     */
    protected $Bestellung;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Bestellung',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Bestellung') ? [] : ['className' => BestellungTable::class];
        $this->Bestellung = TableRegistry::getTableLocator()->get('Bestellung', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Bestellung);

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
