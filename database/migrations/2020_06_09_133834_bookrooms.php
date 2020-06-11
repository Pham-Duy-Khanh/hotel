<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bookrooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookrooms', function (Blueprint $table) {
            $table->primary('book_room_id');
            $table->char('book_room_id', 200)->comment('Book Rooms ID');
            $table->integer('customer_id')->comment("Customer ID");
            $table->char('hotel_id', 200)->comment('Hotel ID');
            $table->char('rooms_id', 200)->comment('Rooms ID');
            $table->date('book_at')->comment('Ngay Dat');
            $table->date('in_at')->comment('Ngay Nhan Phong');
            $table->date('out_at')->comment('Ngay Tra Phong');
            $table->integer('status');
            $table->foreign('customer_id')->references('customer_id')->on('customer');
            $table->foreign('hotel_id')->references('hotel_id')->on('hotels');
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
        Schema::dropIfExists('bookrooms');
    }
}
