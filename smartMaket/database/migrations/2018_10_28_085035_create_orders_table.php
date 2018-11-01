<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('name');
            $table->string('address',255);
            $table->integer('phone');
            $table->decimal('ship_fee')->nullable();
            $table->string('discount',100)->nullable();
            $table->tinyInteger('pay_method')->default(1);
            $table->tinyInteger('status');
            $table->decimal('unit_price',10,2);
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
        Schema::dropIfExists('orders');
    }
}
