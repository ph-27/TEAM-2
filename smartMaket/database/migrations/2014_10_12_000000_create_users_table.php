<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->string('password', 255);
            $table->date('birthday')->nullable();
            $table->tinyInteger('sex');
            $table->string('address');
            $table->string('name');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->string('avatar')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('acc_point');
            $table->tinyInteger('type');
            $table->tinyInteger('role');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}