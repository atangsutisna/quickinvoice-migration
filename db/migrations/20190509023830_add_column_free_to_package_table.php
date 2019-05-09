<?php


use Phinx\Migration\AbstractMigration;

class AddColumnFreeToPackageTable extends AbstractMigration
{
    /**
     * Up Method.
     */
    public function up()
    {
        $table = $this->table('tenant_package');
        $table->addColumn('free', 'boolean', ['default' => false, 'after' => 'payment_unique_code'])
              ->save();
    }
}
