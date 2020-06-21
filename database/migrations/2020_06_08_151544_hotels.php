<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->integer('hotel_id', true)->comment('Hotel ID');
            $table->integer('admin_id')->comment('Admin Id');
            $table->char('hotel_name',250)->comment('Hotel Name');
            $table->integer('matp')->comment('Ma Thanh Pho');
            $table->integer('maqh')->comment('Ma Quan Huyen');
            $table->integer('xaid')->comment('Ma Xa');
            $table->string('address')->nullable()->comment("Address");
            $table->char('count_star',250)->comment('Rating');
            $table->integer('services_id')->comment('Services Id');
            $table->text('describe');
            $table->smallInteger('status');
            $table->date('create_at');
            $table->foreign('admin_id')->references('admin_id')->on('admins');
            $table->foreign('matp')->references('matp')->on('tinhthanhpho');
            $table->foreign('maqh')->references('maqh')->on('quanhuyen');
            $table->foreign('xaid')->references('xaid')->on('xaphuongthitran');
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
        Schema::dropIfExists('hotels');
    }
}
