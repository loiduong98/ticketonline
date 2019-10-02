<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lichchay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichchay',function($table){
            $table->increments('id');
            $table->string('NgayKhoiHanh');
            $table->string('GioKhoiHanh');
            $table->string('SoChuyen');
            $table->string('Gia');
            $table->integer('idTuyen')->unsigned();
            $table->foreign('idTuyen')->references('id')->on('tuyen');
            $table->integer('idXe')->unsigned();
            $table->foreign('idXe')->references('id')->on('xe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lichchay');
    }
}
