<?php


use Phinx\Migration\AbstractMigration;

class AddIdDistrictCityProvinceToCustomer extends AbstractMigration
{
    /**
     * Up Method.
     */
    public function up()
    {
        $table = $this->table('customer');
        $table->addColumn('district_id', 'integer', ['after' => 'district'])
              ->addColumn('city_id', 'integer', ['after' => 'city'])
              ->addColumn('province_id', 'integer', ['after' => 'province'])
              ->update();
    }
}