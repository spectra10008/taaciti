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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->integer('phone');
            $table->string('email')->nullable();
            $table->string('address');
            $table->string('country');
            $table->integer('order_no');
            $table->foreignId('status_id')->constrained('order_statuses');
            $table->foreignId('method_id')->constrained('payment_methods');
            $table->foreignId('coupon_id')->constrained('coupons')->nullable();
            $table->integer('delivery_fees')->default(0);
            $table->integer('discount')->default(0);
            $table->integer('total')->default(0);
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
        Schema::dropIfExists('orders');
    }
};
