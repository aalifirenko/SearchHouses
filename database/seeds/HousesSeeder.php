<?php

use JeroenZwart\CsvSeeder\CsvSeeder;

class HousesSeeder extends CsvSeeder
{
    /**
     * HousesSeeder constructor.
     */
    public function __construct()
    {
        /*
         * Import configuration
         */
        $this->file = '/database/seeds/csvs/houses.csv';
        $this->tablename = 'houses';
        $this->aliases = [
            'Name'       => 'name',
            'Price'      => 'price',
            'Bedrooms'   => 'bedrooms',
            'Bathrooms'  => 'bathrooms',
            'Storeys'    => 'storeys',
            'Garages'    => 'garages',
        ];
        $this->timestamps = false;
        $this->delimiter = ',';
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        parent::run();
    }
}
