<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kunde Entity
 *
 * @property int $KundeID
 * @property string $Vorname
 * @property string $Nachname
 * @property string $E-Mail
 * @property string $Adresse
 * @property string $PLZ
 * @property string $Stadt
 * @property string $Land
 */
class Kunde extends Entity
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
        'Vorname' => true,
        'Nachname' => true,
        'EMail' => true,
        'Adresse' => true,
        'PLZ' => true,
        'Stadt' => true,
        'Land' => true,
    ];
}
