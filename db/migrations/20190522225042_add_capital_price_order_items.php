<?php


use Phinx\Migration\AbstractMigration;

class AddCapitalPriceOrderItems extends AbstractMigration
{
    /**
     * Up Method.
     */
    public function up()
    {
        $table = $this->table('order_items');
        $table->addColumn('capital_price', 'decimal', ['after' => 'taxt_amount'])
            ->save();
    }
}
