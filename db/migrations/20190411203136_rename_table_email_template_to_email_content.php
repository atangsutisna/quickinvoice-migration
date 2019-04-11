<?php


use Phinx\Migration\AbstractMigration;

class RenameTableEmailTemplateToEmailContent extends AbstractMigration
{
    /**
     * Migrate up
     */
    public function up()
    {
        $table = $this->table('email_template');
        $table->rename('email_content')
              ->save();
    }

    /**
     * Migrate down
     */
    public function down()
    {
        $table = $this->table('email_content');
        $table->rename('email_template');
    }
}
