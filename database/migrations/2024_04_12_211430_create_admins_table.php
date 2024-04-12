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
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('Admin_id');
            $table->unsignedBigInteger('Store_id');
            $table->foreign('Store_id')
                  ->references('Store_id')
                  ->on('stores')
                  ->onDelete('cascade');
            $table->string('AdUsername', 60);
            $table->string('AdPassword', 60);
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
        Schema::dropIfExists('admins');
    }
};
