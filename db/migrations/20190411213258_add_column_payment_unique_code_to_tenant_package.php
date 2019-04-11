<?php


use Phinx\Migration\AbstractMigration;

class AddColumnPaymentUniqueCodeToTenantPackage extends AbstractMigration
{
    /**
     * Migrate up
     */
    public function up()
    {
        $table = $this->table('tenant_package');
        $table->addColumn('payment_unique_code', 'boolean', ['default' => false, 'after' => 'multi_user'])
              ->save();
    }
}
