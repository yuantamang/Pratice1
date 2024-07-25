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
        Schema::create('large_bulbs', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("name");
            $table->string("image")->unique();
            $table->foreignId("product_id")->constrained("products")->cascadeOnDelete();
            $table->foreignId("categorey_id")->constrained("categoreys")->cascadeOnDelete();
            $table->foreignId("bulb_id")->constrained("bulbs")->cascadeOnDelete();
            $table->longText("description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('large_bulbs');
    }
};
