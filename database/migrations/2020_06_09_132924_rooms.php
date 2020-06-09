<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->primary('rooms_id');
            $table->char('rooms_id', 200)->comment('Rooms ID');
            $table->char('hotel_id', 200)->comment('Hotel ID');
            $table->string('name')->comment("Rooms Name");
            $table->integer('services_id')->comment('Services Id');
            $table->integer('acreage')->comment("Dien Tich");
            $table->integer('rates')->comment('Gia Phong');
            $table->integer('count_single')->comment('So Giuong Don');
            $table->integer('count_double')->comment('So Giuong Doi');
            $table->integer('status');
            $table->date('create_at');
            $table->foreign('hotel_id')->references('hotel_id')->on('hotels');
            $table->foreign('services_id')->references('services_id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
