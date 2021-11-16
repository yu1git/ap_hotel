<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('reservation_id');
            $table->unsignedInteger('room_id');
            $table->date('lodgingDay');
            $table->integer('lodgingCharge');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
