<?php
declare(strict_types=1);

namespace App\Model\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $contrasena
 * @property string $numero
 * @property string $id_pastillas_fk
 * @property string $imagen
 */
class Usuario extends Entity
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
        'nombre' => true,
        'apellidos' => true,
        'contrasena' => true,
        'numero' => true,
        'tipo' => true,
        'id_pastillas_fk' => true,
        'imagen' => true,
    ];

    protected $_hidden = [
        'contrasena',
    ];

    protected function _setPassword(string $contrasena) : ?string
    {
        if (strlen($contrasena) > 0) {
            return (new DefaultPasswordHasher())->hash($contrasena);
        }
    }
}
