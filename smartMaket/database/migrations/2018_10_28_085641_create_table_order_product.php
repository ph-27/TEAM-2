<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrderProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('order_product', function (Blueprint $table){
            $table->increments('id');
            $table->foreign('order_id')->references(‘order_id’)->on(‘orders’);
            $table->datetime('order_date');
            $table->foreign('product_name',100)->references(‘product_name’)->on(‘products’);
            $table->integer('product_id');
            $table->decimal('unit_price',10,2);
            $table->integer('quantity');
            $table->integer('promotion_id')->nullable();
            $table->decimal('total_amount');
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
        Schema::dropIfExists('order_product');
    }
}
