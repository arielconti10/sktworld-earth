<?php

use Illuminate\Database\Seeder;

class SpotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spots')->insert(
            [
                'name' => 'Praca Roosevelt',
                'description' => 'Pico localizado no centro de SP, no começo da Avenida consolação, conta com um espaço muito amplo, bancos, bordas, escadas e muito mais. Um dos melhores picos de SP!',
                'address' => 'Praça Roosevelt São Paulo - SP',
                'city_id' => '1',
                'country_id' => '1',
                'state_id' => '1',
                'lat' => '-23.548411',
                'long' => '-46.646343',
                'rate' => '1'
            ]
        );
    }
}
