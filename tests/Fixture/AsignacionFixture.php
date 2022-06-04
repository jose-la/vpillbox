<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AsignacionFixture
 */
class AsignacionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'asignacion';
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
                'id_user' => 1,
                'id_farmacos' => 1,
                'tomas' => 1,
                'dias' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
