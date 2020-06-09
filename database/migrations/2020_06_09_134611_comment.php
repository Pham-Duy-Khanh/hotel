<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->primary('comment_id');
            $table->char('comment_id', 200)->comment('Comment ID');
            $table->integer('customer_id')->comment("Customer ID");
            $table->char('hotel_id', 200)->comment('Hotel ID');
            $table->string('content')->comment("Noi Dung");
            $table->integer('status');
            $table->date('create_at');
            $table->foreign('customer_id')->references('customer_id')->on('customer');
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
        Schema::dropIfExists('comment');
    }
}
