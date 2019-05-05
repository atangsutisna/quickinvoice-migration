<?php


use Phinx\Migration\AbstractMigration;

class RenameToBeUniqueCodeTotalAmountUniqueCode extends AbstractMigration
{
    /**
     * Up Method.
     *
     */
    public function up()
    {
        $table = $this->table('email_template');
        $table->renameColumn('unique_total_amount', 'unique_code')
              ->save();
    }
}
