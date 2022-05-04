<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Pastillas seed.
 */
class PastillasSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'marca'    => 'Ibuprofeno',
                'tipo'    => 'Cápsula',
                'color'    => 'Naranja',
                'peso'    => '600 mg',
                'observaciones'    => '',
            ]
        ];

        $table = $this->table('pastillas');
        $table->insert($data)->save();
    }
}
