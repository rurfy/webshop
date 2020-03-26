<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BestellungFixture
 */
class BestellungFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'bestellung';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'BestellNr' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Menge' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Groesse' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Datum' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'Zahlungsart' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'KundeID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'StatusID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'Bestellung_hat_Kunde' => ['type' => 'index', 'columns' => ['KundeID'], 'length' => []],
            'Bestellung_hat_Status' => ['type' => 'index', 'columns' => ['StatusID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['BestellNr'], 'length' => []],
            'Bestellung_hat_Kunde' => ['type' => 'foreign', 'columns' => ['KundeID'], 'references' => ['kunde', 'KundeID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'Bestellung_hat_Status' => ['type' => 'foreign', 'columns' => ['StatusID'], 'references' => ['bestellstatus', 'StatusID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'BestellNr' => 1,
                'Menge' => 1,
                'Groesse' => 'Lorem ipsum dolor sit amet',
                'Datum' => '2020-03-22',
                'Zahlungsart' => 'Lorem ipsum dolor sit amet',
                'KundeID' => 1,
                'StatusID' => 1,
            ],
        ];
        parent::init();
    }
}
