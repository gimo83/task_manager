<?php


use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    /*
    public function change()
    {
        $table = $this->table('user');
        $table->addColumn('id','integer')
              ->addColumn('name','string',['limit'=>100])
              ->addColumn('username','string',['limit'=>100])
              ->addColumn('password','string')
              //->addColumn('locked','boolean')
              ->addColumn('create_on','datetime')
              ->addColumn('create_by','integer')
              ->create();
    }
    */

    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('user');
        $table->addColumn('name','string',['limit'=>100])
              ->addColumn('username','string',['limit'=>100])
              ->addColumn('password','string')
              ->addColumn('locked','boolean')
              ->addColumn('create_on','datetime')
              ->addColumn('create_by','integer')
              ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->table('user')->drop();

    }
}
