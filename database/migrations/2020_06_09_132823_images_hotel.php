<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImagesHotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->primary('images_id');
            $table->char('images_id', 200)->comment('Image ID');
            $table->char('hotel_id',200)->comment('Hotel Id');
            $table->char('name', 250)->comment("Name Images");
            $table->foreign('hotel_id')->references('hotel_id')->on('hotels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
