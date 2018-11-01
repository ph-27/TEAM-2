<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('name',255);
            $table->integer('phone',11);
            $table->tinyInteger('role');
            $table->date('birthday');
            $table->tinyInteger('sex');
            $table->string('address',255);
            $table->integer('point')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->string('password',255);
            $table->string('token');
            $table->timestamp();
    });

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'phone',
                'role',
                'birthday',
                'sex',
                'address',
                'point',
                'status',
            ]);
        });
    }
}
