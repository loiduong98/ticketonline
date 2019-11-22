<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon',function($table){
            $table->increments('id');
            $table->string('NgayDatVe');
            $table->string('TongTien');
            $table->string('GhiChu');
            $table->integer('idKH')->unsigned();
            $table->foreign('idKH')->references('id')->on('khachhang');
            $table->integer('idHTTT')->unsigned();
            $table->foreign('idHTTT')->references('id')->on('hinhthucthanhtoan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadon');
    }
}
