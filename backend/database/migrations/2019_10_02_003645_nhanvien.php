<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien',function($table){
            $table->increments('id');
            $table->string('HoTen');
            $table->string('SDT');
            $table->string('Email');
            $table->string('DiaChi');
            $table->string('NgaySinh');
            $table->string('GioiTinh');
            $table->integer('idCV')->unsigned();
            $table->foreign('idCV')->references('id')->on('chucvu');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUsers')->references('id')->on('users');
            $table->string('TrangThai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
