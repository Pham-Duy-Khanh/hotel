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
            $table->primary('images_id');
            $table->char('images_id', 200)->comment('Image ID');
            $table->char('rooms_id', 200)->comment('Rooms ID');
            $table->char('name', 250)->comment("Name Images");
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
