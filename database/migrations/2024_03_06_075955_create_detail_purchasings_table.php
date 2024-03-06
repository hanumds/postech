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
        Schema::create('detail_purchasings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->string('product_name');
            $table->integer('purchasing_price');
            $table->enum('purchase_status',['delivery','notdelivery'])->default('notdelivery');
            $table->integer('qty');
            $table->integer('sub_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_purchasings');
    }
};
