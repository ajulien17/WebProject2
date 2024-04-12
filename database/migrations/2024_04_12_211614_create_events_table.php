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
        Schema::create('events', function (Blueprint $table) {
            $table->id('Event_id');
            $table->unsignedBigInteger('Store_id');
            $table->string('Title', 255);
            $table->text('Description');
            $table->dateTime('Date');
            $table->timestamps();
        
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
        Schema::dropIfExists('events');
    }
};
