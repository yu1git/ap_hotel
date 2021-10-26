<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create部屋種別マスタTable extends Migration
{
    public function up()
    {
        Schema::create('部屋種別マスタ', function (Blueprint $table) {
            $table->increments('部屋番号種別id');
            $table->string('名称');
            $table->integer('宿泊可能人数');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('部屋種別マスタ');
    }
}
