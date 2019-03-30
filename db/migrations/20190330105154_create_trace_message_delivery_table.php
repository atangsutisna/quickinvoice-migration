<?php


use Phinx\Migration\AbstractMigration;

class CreateTraceMessageDeliveryTable extends AbstractMigration
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
        $table = $this->table('trace_message_delivery', [
            'id' => true,
            'primary_key' => 'id',
        ]);
        $table->addColumn('uid', 'string', ['limit' => 260])
              ->addColumn('send_by', 'string', ['limit' => 260])
              ->addColumn('instrument', 'enum', ['values' => ['email', 'whatsapp']])
              ->addColumn('creation_time', 'timestamp')
              ->create();
    }
}
