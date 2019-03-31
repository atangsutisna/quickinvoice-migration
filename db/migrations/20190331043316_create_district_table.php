<?php


use Phinx\Migration\AbstractMigration;

class CreateDistrictTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('districts', [
            'id' => false,
            'primary_key' => 'subdistrict_id',
        ]);
        $table->addColumn('subdistrict_id', 'integer')
              ->addColumn('province_id', 'integer')
              ->addColumn('province', 'string', ['limit' => 250])
              ->addColumn('city_id', 'integer')
              ->addColumn('city', 'string', ['limit' => 250])
              ->addColumn('type', 'string', ['limit' => 50])
              ->addColumn('subdistrict_name', 'string', ['limit' => 250])
              ->addColumn('creation_time', 'timestamp')
              ->create();
    }
}
