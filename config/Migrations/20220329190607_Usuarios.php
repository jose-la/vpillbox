<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Usuarios extends AbstractMigration
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
        // create the table ->addColumn('creacion','datetime')
        $table = $this->table('usuarios');
        $table->addColumn('nombre','char')->addColumn('apellidos','char')->addColumn('numero','char')->addColumn('id_pastillas_fk','char')->create();
        /* $table = $this->table('users');
        $table->addColumn('nombre','char')->addColumn('apellidos','char')->addColumn('password','char')->addColumn('telefono','char')->addColumn('role','char')->addColumn('imagen','char')->addColumn('created','datetime')->addColumn('modified','datetime')->create(); */
    }
}
