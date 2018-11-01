<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table){
            $table->increments('id');
            $table->foreign('user_id')->references(‘user_id’)->on(‘users’);
            $table->foreign('product_id')->references(‘product_id’)->on(‘product’);
            $table->datetime('date_review');
            $table->tinyInteger('rank');
            $table->text('detail');
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
        Schema::dropIfExists('reviews');
    }
}
