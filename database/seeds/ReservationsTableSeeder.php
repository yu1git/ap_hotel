<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => '1',
            'member' => '2',
            'checkin' => '2021-10-20',
            'checkout' => '2021-10-21'
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'user_id' => '2',
            'member' => '4',
            'checkin' => '2021-10-22',
            'checkout' => '2021-10-23'
        ];
        DB::table('reservations')->insert($param);
    }
}
