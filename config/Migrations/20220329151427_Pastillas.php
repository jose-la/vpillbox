<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Pastillas extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        // create the table
        $table = $this->table('pastillas');
        $table->addColumn('marca','char')->addColumn('tipo','char')->addColumn('color','char')->addColumn('peso','char')->addColumn('observaciones','char')->create();
    }
}
