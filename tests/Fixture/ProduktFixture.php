<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProduktFixture
 */
class ProduktFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'produkt';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'ProduktID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Bezeichnung' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Farbe' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Art' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Preis' => ['type' => 'float', 'length' => 9, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'Bild' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ProduktID'], 'length' => []],
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
                'ProduktID' => 1,
                'Bezeichnung' => 'Lorem ipsum dolor sit amet',
                'Farbe' => 'Lorem ipsum dolor sit amet',
                'Art' => 'Lorem ipsum dolor sit amet',
                'Preis' => 1,
                'Bild' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
