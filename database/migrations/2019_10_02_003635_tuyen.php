<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tuyen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuyen',function($table){
            $table->increments('id');
            $table->string('TenTuyen');
            $table->integer('idBenDi')->unsigned();
            $table->foreign('idBenDi')->references('id')->on('ben');
            $table->integer('idBenDen')->unsigned();
            $table->foreign('idBenDen')->references('id')->on('ben');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tuyen');
    }
}
