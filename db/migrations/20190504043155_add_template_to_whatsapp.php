<?php


use Phinx\Migration\AbstractMigration;

class AddTemplateToWhatsapp extends AbstractMigration
{
    /**
     * Up Method.
     */
    public function up()
    {
        $table = $this->table('whatsapp_template');
        $table->renameColumn('message', 'template_1')
              ->addColumn('template_2', 'text', ['after' => 'template_1', 'null' => true])
              ->addColumn('template_3', 'text', ['after' => 'template_2', 'null' => true])
              ->addColumn('template_4', 'text', ['after' => 'template_3', 'null' => true])
              ->save();
    }
}
