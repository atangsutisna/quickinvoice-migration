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
        $table->renameTable('email_content');
    }

    /**
     * Migrate down
     */
    public function down()
    {
        $table = $this->table('email_content');
        $table->renameTable('email_template');
    }
}
