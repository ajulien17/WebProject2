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
        Schema::create('user_roles', function (Blueprint $table) {
            $table->bigIncrements('UserRole_id');
            $table->unsignedBigInteger('User_id');
            $table->unsignedBigInteger('Role_id');
            $table->foreign('User_id')
                  ->references('User_id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->foreign('Role_id')
                  ->references('Role_id')
                  ->on('roles')
                  ->onDelete('cascade');
            $table->string('VerificationToken', 255);
            $table->boolean('IsVerified');
            $table->dateTime('AssignedDate');
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
        Schema::dropIfExists('user_roles');
    }
};
