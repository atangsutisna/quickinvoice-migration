<?php


use Phinx\Migration\AbstractMigration;

class AddGeneratedCodeToTenant extends AbstractMigration
{
    /**
     * Up Method.
     */
    public function up()
    {
        $table = $this->table('tenant');
        $table->addColumn('generated_unique_code', 'boolean', ['default' => false, 'after' => 'bank_account_number'])
              ->save();
    }
}
