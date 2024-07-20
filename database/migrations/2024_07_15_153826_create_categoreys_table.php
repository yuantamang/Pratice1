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
        Schema::create('categoreys', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->string("name")->nullable();
            $table->string("image")->nullable();
            $table->foreignId("product_id")->constrained("products")->cascadeOnDelete();
            $table->longText("description")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoreys');
    }
};
