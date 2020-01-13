<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chitietve extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietve',function($table){
            $table->increments('id');
            $table->integer('idVe')->unsigned();
            $table->integer('idGhe')->unsigned();
            $table->string('Gia');
            $table->string('SoLuong');
            $table->string('MaBiMat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietve');
    }
}
