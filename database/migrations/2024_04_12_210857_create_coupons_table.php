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
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('Coupon_id');
            $table->unsignedBigInteger('Store_id');
            $table->foreign('Store_id')
                  ->references('Store_id')
                  ->on('stores')
                  ->onDelete('cascade');
            $table->string('CouponCode', 20)->unique();
            $table->integer('Discount');
            $table->date('ValidFrom');
            $table->date('ValidUntil');
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
        Schema::dropIfExists('coupons');
    }
};
