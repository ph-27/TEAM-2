<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
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
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('product_name');
            $table->integer('pic_id');
            $table->integer('unit_price');
            $table->datetime('imported_date');
            $table->datetime('expir_date');
            $table->string('orgin',50);
            $table->integer('imp_quantity');
            $table->text('description');
            $table->integer('in_stock');
            $table->integer('promotion_id')->unsigned()->nullable();
            $table->foreign('promotion_id')->references('id')->on('promotions');
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