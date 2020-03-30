<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produkt Entity
 *
 * @property int $ProduktID
 * @property string $Bezeichnung
 * @property string $Farbe
 * @property string $Art
 * @property float $Preis
 * @property string $Bild
 */
class Produkt extends Entity
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
        'Bezeichnung' => true,
        'Farbe' => true,
        'Art' => true,
        'Preis' => true,
        'Bild' => true,
    ];
}
