<?php


use Phinx\Migration\AbstractMigration;

class AddEmailTemplateInvoiceSentAndConfirmed extends AbstractMigration
{
    /**
     * Change Method.
     *
     */
    public function up()
    {
        $users = $this->table('email_content');
        $users->changeColumn('email_type', 'enum', [
                'values' => ['order_created', 'order_paid', 'order_complete', 'tenant_created', 'tenant_confirmed', 
                'reset_password', 'user_created', 'user_registered', 'invoice_sent', 'payment_confirmed']
            ])
            ->save();
    }
}
