<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        //
        Schema::create('order_products', function (Blueprint $table){
            $table->increments('id');
            $table->integer('order_id')->unsigned()->nullable();
            $table->datetime('order_date');
            $table->string('product_name',100);
            $table->integer('product_id')->unsigned()->nullable();
            $table->decimal('unit_price',10,2);
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('promotion_id')->unsigned()->nullable();
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
        Schema::dropIfExists('order_products');
    }
}
