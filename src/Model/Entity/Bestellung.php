<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bestellung Entity
 *
 * @property int $BestellNr
 * @property int $Menge
 * @property string $Groesse
 * @property \Cake\I18n\FrozenDate $Datum
 * @property string $Zahlungsart
 * @property int $KundeID
 * @property int $StatusID
 */
class Bestellung extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'Menge' => true,
        'Groesse' => true,
        'Datum' => true,
        'Zahlungsart' => true,
        'KundeID' => true,
        'StatusID' => true,
    ];
}
