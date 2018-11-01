<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table){
            $table->increments('id');
            $table->foreign('category_id')->references(‘category_id’)->on(‘categories’);
            $table->string('product_name');
            $table->integer('unit_price');
            $table->datetime('imported_date');
            $table->datetime('expir_date');
            $table->string('orgin',50);
            $table->integer('imp_quantity');
            $table->text('description');
            $table->integer('in_stock');
            $table->string('promotion_id')->nullable();
            $table->tinyInteger('type'); 
            $table->string('slug',255); 
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
        Schema::dropIfExists('products');
    }
}
