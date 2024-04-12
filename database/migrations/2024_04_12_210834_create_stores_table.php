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
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('Store_id');
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')
                  ->references('User_id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->string('StoreName', 40);
            $table->text('StoreDetails');
            $table->dateTime('CreatedDate');
            $table->dateTime('ApprovedDate');
            $table->boolean('IsActive');
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
        Schema::dropIfExists('stores');
    }
};
