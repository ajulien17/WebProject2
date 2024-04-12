<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('OrderDetail_id');
            $table->unsignedBigInteger('Order_id');
            $table->unsignedBigInteger('Product_id');
            $table->integer('Quantity');
            $table->decimal('Subtotal', 10, 2);
            $table->timestamps();
        
            $table->foreign('Order_id')
                  ->references('Order_id')
                  ->on('orders')
                  ->onDelete('cascade');
        
            $table->foreign('Product_id')
                  ->references('Product_id')
                  ->on('products')
                  ->onDelete('cascade');
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
};
