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
        Schema::create('rankings', function (Blueprint $table) {
            $table->bigIncrements('Ranking_id');
            $table->unsignedBigInteger('Customer_id');
            $table->unsignedBigInteger('Store_id');
            $table->integer('NbStars');
            $table->timestamps();
        
            $table->foreign('Customer_id')
                  ->references('User_id')
                  ->on('users')
                  ->onDelete('cascade');
        
            $table->foreign('Store_id')
                  ->references('Store_id')
                  ->on('stores')
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
        Schema::dropIfExists('rankings');
    }
};
