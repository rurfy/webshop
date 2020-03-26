<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BestelldetailsFixture
 */
class BestelldetailsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'DetailID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'BestellNr' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ProduktID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Menge' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Groesse' => ['type' => 'string', 'length' => 5, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'Detail_hat_Bestellung' => ['type' => 'index', 'columns' => ['BestellNr'], 'length' => []],
            'Detail_hat_Produkt' => ['type' => 'index', 'columns' => ['ProduktID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['DetailID'], 'length' => []],
            'Detail_hat_Bestellung' => ['type' => 'foreign', 'columns' => ['BestellNr'], 'references' => ['bestellung', 'BestellNr'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'Detail_hat_Produkt' => ['type' => 'foreign', 'columns' => ['ProduktID'], 'references' => ['produkt', 'ProduktID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'DetailID' => 1,
                'BestellNr' => 1,
                'ProduktID' => 1,
                'Menge' => 1,
                'Groesse' => 'Lor',
            ],
        ];
        parent::init();
    }
}
