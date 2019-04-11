<?php


use Phinx\Migration\AbstractMigration;

class AddColumnCityNameToTableCities extends AbstractMigration
{
    /**
     * Migrate up
     */
    public function up()
    {
        $table = $this->table('cities');
        $table->addColumn('city_name', 'string', ['limit' => 250, 'after' => 'type'])
              ->save();
    }
}
