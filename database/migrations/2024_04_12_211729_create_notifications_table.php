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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id('Notification_id');
            $table->unsignedBigInteger('Order_id');
            $table->unsignedBigInteger('Buyer_id');
            $table->unsignedBigInteger('Seller_id');
            $table->text('Message');
                        $table->timestamps();
        
            $table->foreign('Order_id')
                  ->references('Order_id')
                  ->on('orders')
                  ->onDelete('cascade');
        
            $table->foreign('Buyer_id')
                  ->references('User_id')
                  ->on('users')
                  ->onDelete('cascade');
        
            $table->foreign('Seller_id')
                  ->references('User_id')
                  ->on('users')
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
        Schema::dropIfExists('notifications');
    }
};
