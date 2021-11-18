<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('ja_JP');
        for ($i = 0; $i < 10; $i++){
        $param = [
            'kind_id' =>  $faker->randomDigit(),
            'roomNumber' => $faker->randomDigit(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('rooms')->insert($param);
        }
    }
}
