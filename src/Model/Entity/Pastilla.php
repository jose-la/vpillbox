<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pastilla Entity
 *
 * @property string $id_pastillas
 * @property string $marca
 * @property string $tipo
 * @property string $color
 * @property string $peso
 * @property string $observaciones
 * @property string $imagen
 */
class Pastilla extends Entity
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
        'id_pastillas' => true,
        'marca' => true,
        'tipo' => true,
        'color' => true,
        'peso' => true,
        'observaciones' => true,
        'imagen' => true,
    ];
}
