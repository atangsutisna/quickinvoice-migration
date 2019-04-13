<?php


use Phinx\Migration\AbstractMigration;

class AddColumnShippingModuleToTenantPackage extends AbstractMigration
{
    /**
     * Migrate up
     */
    public function up()
    {
        $table = $this->table('tenant_package');
        $table->addColumn('module_shipping_cost', 'boolean', ['default' => false, 'after' => 'payment_unique_code'])
              ->save();
    }
}
