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
        Schema::create('product', function (Blueprint $table) {
            $table->id()->autoIncrement()->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('description')->nullable(true);
            $table->string('image_url')->nullable(true);
            $table->string("address_store")->nullable(true);
            $table->foreignId('category')->references('id')->on('category');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
