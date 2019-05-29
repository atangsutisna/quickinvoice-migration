<?php


use Phinx\Migration\AbstractMigration;

class AddCustomerIdToOrders extends AbstractMigration
{
    /**
     * Up Method.
     */
    public function up()
    {
        $table = $this->table('orders');
        $table->addColumn('customer_id', 'integer', ['after' => 'form_type'])
              ->update();
    }
}
