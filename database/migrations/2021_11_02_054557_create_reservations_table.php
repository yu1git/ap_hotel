<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            // 外部キー：主キー（increments）は自動でunsigned型になるので、こっちも同じ型にする必要がある？
            $table->unsignedInteger('user_id');
            $table->integer('member');
            $table->date('checkin');
            $table->date('checkout');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
