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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('Review_id');
            $table->unsignedBigInteger('Customer_id');
            $table->unsignedBigInteger('Product_id');
            $table->text('ReviewText')->nullable();
            $table->timestamps();
        
            $table->foreign('Customer_id')
                  ->references('User_id')
                  ->on('users')
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
        Schema::dropIfExists('reviews');
    }
};
