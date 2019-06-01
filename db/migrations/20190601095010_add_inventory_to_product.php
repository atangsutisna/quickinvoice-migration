<?php


use Phinx\Migration\AbstractMigration;

class AddInventoryToProduct extends AbstractMigration
{
    /**
     * Up Method.
     */
    public function change()
    {
        $table = $this->table('product');
        $table->addColumn('use_inventory', 'boolean', ['after' => 'unit', 'default' => false])
            ->addColumn('qty', 'integer', ['after' => 'use_inventory', 'default' => 0])
            ->save();
    }
}
