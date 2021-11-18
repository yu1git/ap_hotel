<?php

use Illuminate\Database\Seeder;

class KindsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('ja_JP');
        for ($i = 0; $i < 10; $i++){
        $param = [
            'name' => $faker->randomLetter(),
            'max' => $faker->randomDigit(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('kinds')->insert($param);
        }
    }
}
