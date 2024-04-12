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
        Schema::create('follows', function (Blueprint $table) {
            $table->unsignedBigInteger('User_id');
            $table->unsignedBigInteger('Store_id');
            $table->timestamps();
        
            $table->foreign('User_id')
                  ->references('User_id')
                  ->on('users')
                  ->onDelete('cascade');
        
            $table->foreign('Store_id')
                  ->references('Store_id')
                  ->on('stores')
                  ->onDelete('cascade');
        
            $table->primary(['User_id', 'Store_id']);
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follows');
    }
};
