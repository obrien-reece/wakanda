<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_purchase', function (Blueprint $table) {
            $table->integer('id');
            $table->foreignId('product_id')->references('id')->on('product')->cascadeOnDelete();
            $table->string("mpesa_code");
            $table->string("quantity");
            $table->string("unit_price");
            $table->string("total_price");
            $table->string("purchase_date");
            $table->string("delivery_address");
            $table->string("delivery_status");
            $table->string("payment_status");
            $table->string("payment_method");
            $table->string("transaction_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_purchases');
    }
};
