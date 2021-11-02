<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'address' => '大阪府大阪市',
            'tel' => '00-1111-2222'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'jiro',
            'address' => '京都府京都市',
            'tel' => '33-4444-5555'
        ];
        DB::table('users')->insert($param);
    }
}
