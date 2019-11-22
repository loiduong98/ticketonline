<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chitietghe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietghe',function($table){
            $table->increments('id');
            $table->integer('idSoDoGhe')->unsigned();
            $table->foreign('idSoDoGhe')->references('id')->on('sodoghe');          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietghe');
    }
}
