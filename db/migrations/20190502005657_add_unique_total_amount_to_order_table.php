<?php


use Phinx\Migration\AbstractMigration;

class AddUniqueTotalAmountToOrderTable extends AbstractMigration
{
    /**
     * Up Method.
     */
    public function up()
    {
        $table = $this->table('orders');
        $table->addColumn('unique_total_amount', 'decimal', ['after' => 'total_amount', 'null' => true])->save();
    }
}
