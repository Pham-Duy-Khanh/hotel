<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Xaphuongthitran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xaphuongthitran', function (Blueprint $table) {
            $table->integer('xaid', true)->comment('Ma Xa');
            $table->string('name_xa')->comment("Name Xa");
            $table->string('type_xa');
            $table->integer('maqh')->comment('Ma Quan Huyen');
            $table->foreign('maqh')->references('maqh')->on('quanhuyen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xaphuongthitran');
    }
}
