<?php


use Phinx\Migration\AbstractMigration;

class AddCapitalPriceFinalPriceProduct extends AbstractMigration
{
    /**
     * Up Method.
     */
    public function up()
    {
        $table = $this->table('product');
        $table->renameColumn('price', 'final_price')
            ->addColumn('capital_price', 'decimal', ['after' => 'description'])->save();
    }
}
