<?php

use Illuminate\Database\Seeder;

class DetailsTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'reservation_id' => '1',
            'room_id' => '1',
            'lodgingDay' => '2021-10-20',
            'lodgingCharge' => '6000',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('details')->insert($param);

        $param = [
            'reservation_id' => '2',
            'room_id' => '2',
            'lodgingDay' => '2021-10-22',
            'lodgingCharge' => '7000',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('details')->insert($param);
    }
}
