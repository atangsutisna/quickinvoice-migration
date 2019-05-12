<?php


use Phinx\Migration\AbstractMigration;

class AlterColumnEmailTypeEmailContent extends AbstractMigration
{
    /**
     * Up Method.
     */
    public function up()
    {
        $users = $this->table('email_content');
        $users->changeColumn('email_type', 'enum', [
                'values' => ['order_created', 'order_paid', 'order_complete', 'tenant_created', 'tenant_confirmed', 
                'reset_password', 'user_created', 'user_registered']
            ])
            ->save();
    }
}
