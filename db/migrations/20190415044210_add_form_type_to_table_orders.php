<?php


use Phinx\Migration\AbstractMigration;

class AddFormTypeToTableOrders extends AbstractMigration
{
    /**
     * Up Method.
     */
    public function up()
    {
        $table = $this->table('orders');
        $table->addColumn('form_type', 'enum', ['values' => ['simple', 'advance'], 'default' => 'simple', 'after' => 'tenant_id'])
              ->save();
    }
}
