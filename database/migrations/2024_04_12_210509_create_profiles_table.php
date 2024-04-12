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
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('Profile_id');
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')
                  ->references('User_id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->string('FirstName', 255);
            $table->string('LastName', 255);
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
        Schema::dropIfExists('profiles');
    }
};
