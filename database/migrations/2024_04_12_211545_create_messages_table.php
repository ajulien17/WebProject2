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
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('Message_id');
            $table->unsignedBigInteger('Sender_id');
            $table->unsignedBigInteger('Receiver_id');
            $table->text('Message');
            $table->dateTime('Time');
            $table->timestamps();
        
            $table->foreign('Sender_id')
                  ->references('User_id')
                  ->on('users')
                  ->onDelete('cascade');
        
            $table->foreign('Receiver_id')
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
        Schema::dropIfExists('messages');
    }
};
