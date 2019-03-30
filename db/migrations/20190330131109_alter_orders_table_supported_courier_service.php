<?php


use Phinx\Migration\AbstractMigration;

class AlterOrdersTableSupportedCourierService extends AbstractMigration
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
        $table = $this->table('orders');
        $table->addColumn('origin_address_district_id', 'integer', ['after' => 'origin_address_district'])
              ->addColumn('origin_address_city_id', 'integer', ['after' => 'origin_address_city'])
              ->addColumn('origin_address_province_id', 'integer', ['after' => 'origin_address_province'])
              ->addColumn('shipping_address_district_id', 'integer', ['after' => 'shipping_address_district'])
              ->addColumn('shipping_address_city_id', 'integer', ['after' => 'shipping_address_city'])
              ->addColumn('shipping_address_province_id', 'integer', ['after' => 'shipping_address_province'])
              ->addColumn('courier_service', 'string', ['limit' => 50, 'after' => 'courier'])
              ->addColumn('total_weight', 'decimal', ['after' => 'courier_service'])
              ->update();
    }
}
