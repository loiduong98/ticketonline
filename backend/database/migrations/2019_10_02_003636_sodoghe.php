<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sodoghe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sodoghe',function($table){
            $table->increments('id');
            $table->string('TenSoDo');
            $table->integer('SoDong');
            $table->integer('SoCot');
            $table->integer('UrlHinh');
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
        Schema::dropIfExists('sodoghe');
    }
}
