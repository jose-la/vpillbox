<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'password' => '',
                'telefono' => '',
                'role' => '',
                'imagen' => '',
                'created' => '2022-04-27 17:28:42',
                'modified' => '2022-04-27 17:28:42',
            ],
        ];
        parent::init();
    }
}
