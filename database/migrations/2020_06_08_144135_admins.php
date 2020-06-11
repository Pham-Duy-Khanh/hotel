<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->integer('admin_id', true)->comment("Admin ID");
            $table->string('name')->comment("Name");
            $table->string('username')->index()->comment("User Name");
            $table->string('email', 25)->unique()->comment("Email");
            $table->string('password')->comment("Password");
            $table->string('phone')->nullable()->comment("Phone");
            $table->string('address')->nullable()->comment("Address");
            $table->string('birthday')->nullable()->comment('Birthday');
            $table->enum('gender', [0, 1, 2])->comment("Gender");
            $table->smallInteger('role')->default('1')->comment("1->Manager; 2->Staff");
            $table->smallInteger('status')->default('1')->comment("1->Active; 2->No Active");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
