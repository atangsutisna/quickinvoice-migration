<?php


use Phinx\Migration\AbstractMigration;

class AddColumnConfirmedPaymentToOrders extends AbstractMigration
{
    /**
     * Up Method.
     */
    public function up()
    {
        $table = $this->table('orders');
        $table->addColumn('payment_confirmed_by', 'string', ['limit' => 250, 'after' => 'payment_time', 'null' => true])->save();
    }
}
