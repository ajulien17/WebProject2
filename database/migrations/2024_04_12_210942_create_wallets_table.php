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
        Schema::create('wallets', function (Blueprint $table) {
            $table->bigIncrements('Wallet_id');
            $table->unsignedBigInteger('Customer_id');
            $table->foreign('Customer_id')
                  ->references('User_id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->decimal('WalletBalance', 10, 2);
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
        Schema::dropIfExists('wallets');
    }
};
