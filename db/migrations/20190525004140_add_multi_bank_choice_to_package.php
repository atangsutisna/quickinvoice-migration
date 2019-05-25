<?php


use Phinx\Migration\AbstractMigration;

class AddMultiBankChoiceToPackage extends AbstractMigration
{
    /**
     * Change Method.
     */
    public function up()
    {
        $table = $this->table('tenant_package');
        $table->addColumn('multi_bank_account', 'boolean', ['default' => false, 'after' => 'module_shipping_cost'])
              ->save();
    }
}
