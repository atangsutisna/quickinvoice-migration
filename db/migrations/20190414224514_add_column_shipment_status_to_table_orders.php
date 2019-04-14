<?php


use Phinx\Migration\AbstractMigration;

class AddColumnShipmentStatusToTableOrders extends AbstractMigration
{
    /**
     * Migrate up.
     */
    public function up()
    {
        $table = $this->table('orders');
        $table->addColumn('shipment_status', 'enum', 
            [
                'values' => ['draft', 'shipped'], 
                'default' => 'draft',
                'after' => 'payment_time'
            ])
            ->addColumn('shipment_time', 'datetime', ['after' => 'shipment_status'])
            ->addColumn('tracking_number', 'string', ['limit' => 250, 'after' => 'shipment_time'])
            ->save();
    }
}
