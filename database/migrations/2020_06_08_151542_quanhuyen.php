<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Quanhuyen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quanhuyen', function (Blueprint $table) {
            $table->integer('maqh', true)->comment('Ma Quan Huyen');
            $table->string('name_qh')->comment("Name Quan Huyen");
            $table->string('type_qh');
            $table->integer('matp')->comment('Ma Thanh Pho');
            $table->foreign('matp')->references('matp')->on('tinhthanhpho');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quanhuyen');
    }
}
