<?php


use Phinx\Migration\AbstractMigration;

class AddColumnIpAddressUserLogin extends AbstractMigration
{
    /**
     * Up Method.
     */
    public function up()
    {
        $table = $this->table('user_login');
        $table->addColumn('ipaddress', 'string', ['limit' => 100, 'after' => 'login_status'])
              ->save();

    }
}
