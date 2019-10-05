<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ve extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ve',function($table){
            $table->increments('id');
            $table->string('NgayDatVe');
            $table->integer('idKH')->unsigned();
            $table->foreign('idKH')->references('id')->on('khachhang');
            $table->integer('idLC')->unsigned();
            $table->foreign('idLC')->references('id')->on('lichchay');
            $table->integer('idHD')->unsigned();
            $table->foreign('idHD')->references('id')->on('hoadon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ve');
    }
}
