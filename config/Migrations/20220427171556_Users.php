<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Users extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('nombre','char')->addColumn('apellidos','char')->addColumn('password','char')->addColumn('telefono','char')->addColumn('role','char')->addColumn('imagen','char')->addColumn('created','datetime')->addColumn('modified','datetime')->create();
    }
}
