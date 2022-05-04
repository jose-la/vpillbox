<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 */
class UsuariosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nombre' => '',
                'apellidos' => '',
                'numero' => '',
                'id_pastillas_fk' => '',
                'creacion' => '2022-03-29 18:56:09',
            ],
        ];
        parent::init();
    }
}
