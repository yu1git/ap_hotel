<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKindsTable extends Migration
{
    public function up()
    {
        Schema::create('kinds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('max');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kinds');
    }
}
