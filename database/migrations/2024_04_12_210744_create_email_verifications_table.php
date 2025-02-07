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
        Schema::create('email_verifications', function (Blueprint $table) {
            $table->bigIncrements('Verification_id');
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')
                  ->references('User_id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->string('Number', 255);
            $table->string('Address', 255);
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
        Schema::dropIfExists('email_verifications');
    }
};
