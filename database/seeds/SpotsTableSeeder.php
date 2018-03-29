<?php

use Illuminate\Database\Seeder;

class SpotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spots')->insert([
            'name' => 'Marquize do Ibirapuera',
            'description' => 'Perfeito para a prática do skate no estilo "flatground", espaço muito amplo conta com um chão lisinho para você mandar as melhores manobras',
            'address' => 'Parque do Ibirapuera',
            'city_id' => '1',
            'country_id' => '1',
            'state_id' => '1',
            'lat' => '-23.5848',
            'long' => '-46.6559',
            'rate' => '5',
            ]);
        DB::table('spots')->insert([
            'name' => 'Praça Roosevelt',
            'description' => 'No centro de São Paulo, uma praça perfeita para quem adora bordas e escadas, pico clássico',
            'address' => 'Praça Franklin Roosevelt - Bela Vista, São Paulo - SP',
            'city_id' => '1',
            'country_id' => '1',
            'state_id' => '1',
            'lat' => '-23.5485',
            'long' => '-46.6461',
            'rate' => '5',
        ]);
    }
}
