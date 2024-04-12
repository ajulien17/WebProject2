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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('Product_id');
            $table->string('Name', 255);
            $table->decimal('Price', 10, 2);
            $table->text('Description');
            $table->integer('Quantity');
            $table->boolean('IsAvailable');
            $table->unsignedBigInteger('Store_id');
            $table->foreign('Store_id')
                  ->references('Store_id')
                  ->on('stores')
                  ->onDelete('cascade');
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
};
