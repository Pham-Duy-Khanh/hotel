<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->integer('customer_id', true)->comment("Customer ID");
            $table->string('name')->comment("Customer Name");
            $table->string('email', 25)->unique()->comment("Email");
            $table->string('password')->comment("Password");
            $table->string('phone')->nullable()->comment("Phone");
            $table->string('address')->nullable()->comment("Address");
            $table->string('birthday')->nullable()->comment('Birthday');
            $table->enum('gender', [0, 1, 2])->nullable()->comment("Gender");
            $table->integer('idcard')->nullable()->comment('CMTND');
            $table->smallInteger('status')->default('1')->comment("1->Active; 2->No Active");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
