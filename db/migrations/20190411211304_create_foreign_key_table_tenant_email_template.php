<?php


use Phinx\Migration\AbstractMigration;

class CreateForeignKeyTableTenantEmailTemplate extends AbstractMigration
{
    /**
     * Migration up
     */
    public function up()
    {
        $table = $this->table('tenant_email_template');
        $table->addForeignKey('tenant_id', 'tenant', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
              ->save();
    }
}
