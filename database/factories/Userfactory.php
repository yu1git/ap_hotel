<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {

    return [
        'name' => $faker->name(),
        //そのままだとアドレスも表示される。アドレスの郵便番号を表示せず住所のみ
        'address' => substr($faker->address(),7),
        'tel' => $faker->phoneNumber(),
    ];
});
