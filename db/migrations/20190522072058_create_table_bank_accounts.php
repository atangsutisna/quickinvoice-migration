<?php


use Phinx\Migration\AbstractMigration;

class CreateTableBankAccounts extends AbstractMigration
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
        $table = $this->table('bank_accounts', [
            'id' => true,
            'primary_key' => 'id',
        ]);
        $table->addColumn('tenant_id', 'integer', ['limit' => 11])
              ->addColumn('name', 'string', ['limit' => 250])
              ->addColumn('account_holder', 'string', ['limit' => 250])
              ->addColumn('account_number', 'string', ['limit' => 250])
              ->addColumn('modification_time', 'timestamp')
              ->addForeignKey('tenant_id', 'tenant', 'id', array('delete'=> 'CASCADE', 'update'=> 'NO_ACTION'))
              ->create();
        
    }
}
