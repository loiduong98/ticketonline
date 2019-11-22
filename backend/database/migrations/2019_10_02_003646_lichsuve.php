<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lichsuve extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichsuve',function($table){
            $table->increments('id');
            $table->string('MoTa');
            $table->integer('idNV')->unsigned();
            $table->foreign('idNV')->references('id')->on('nhanvien');
            $table->integer('idVe')->unsigned();
            $table->foreign('idVe')->references('id')->on('ve');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lichsuve');
    }
}
