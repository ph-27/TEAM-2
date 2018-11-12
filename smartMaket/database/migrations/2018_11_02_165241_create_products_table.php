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
            $table->string('product_name');
            $table->string('picture');
            $table->integer('unit_price');
            $table->date('imported_date');
            $table->date('expired_date');
            $table->string('origin',50);
            $table->integer('imp_quantity');
            $table->text('description')->nullable();
            $table->integer('in_stock');
            $table->integer('promotion_id')->unsigned()->nullable();
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