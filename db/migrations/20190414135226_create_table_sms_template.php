<?php


use Phinx\Migration\AbstractMigration;

class CreateTableSmsTemplate extends AbstractMigration
{
    /**
     * Change Method.
     *
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
        $table = $this->table('sms_template', [
            'id' => true,
            'primary_key' => 'id',
        ]);
        $table->addColumn('tenant_id', 'string', ['limit' => 260])
              ->addColumn('template', 'string', ['limit' => 250])
              ->addColumn('default', 'boolean', ['default' => false])
              ->addColumn('modification_time', 'timestamp')
              ->create();
    }
}
