<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $KundeID
 * @property string $Vorname
 * @property string $Nachname
 * @property string $EMail
 * @property string $Adresse
 * @property string $PLZ
 * @property string $Stadt
 * @property string $Land
 * @property string $Benutzername
 * @property string $Passwort
 */
class User extends Entity
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
        'Benutzername' => true,
        'Passwort' => true,
    ];

    protected function _setPasswort($Passwort)
    {
        if (strlen($Passwort) > 0) {
            return (new DefaultPasswordHasher)->hash($Passwort);
        }
    }
}
