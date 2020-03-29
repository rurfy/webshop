<?php
declare(strict_types=1);

namespace App\Model\Entity;

/**
 * Produkt Entity
 *
 * @property int $ProduktID
 * @property string $Bezeichnung
 * @property string $Farbe
 * @property string $Art
 * @property float $Preis
 */
class CartItem
{
    public $Produkt;
    public $Menge;

    function __construct($produkt, $menge) {
        $this->Produkt = $produkt;
        $this->Menge = $menge;
    }

}
