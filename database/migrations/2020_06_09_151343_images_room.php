<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImagesRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images_room', function (Blueprint $table) {
            $table->integer('images_id', true)->comment('Image ID');
            $table->integer('rooms_id')->comment('Rooms ID');
            $table->char('name_images_room',250)->comment("Name Images");
            $table->foreign('rooms_id')->references('rooms_id')->on('rooms');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images_room');
    }
}
