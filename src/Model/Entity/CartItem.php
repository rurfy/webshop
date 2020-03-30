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
    public $groesse;

    function __construct($produkt, $menge, $groesse) {
        $this->Produkt = $produkt;
        $this->Menge = $menge;
        $this->groesse = $groesse;
    }

}
