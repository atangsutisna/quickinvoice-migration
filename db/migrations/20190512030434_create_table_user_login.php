<?php


use Phinx\Migration\AbstractMigration;

class CreateTableUserLogin extends AbstractMigration
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
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('user_login', [
            'id' => true,
            'primary_key' => 'id',
        ]);
        $table->addColumn('tenant_id', 'string', ['limit' => 260])
              ->addColumn('user_id', 'string', ['limit' => 250])
              ->addColumn('login_status', 'enum', ['values' => ['success', 'failed']])
              ->addColumn('login_time', 'timestamp')
              ->create();
    }
}
