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
        Schema::create('li_pols', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("name");
            $table->string("image");
            $table->foreignId("product_id")->constrained("products")->cascadeOnDelete();
            $table->foreignId("categorey_id")->constrained("categoreys")->cascadeOnelete();
            $table->foreignId("component_id")->constrained("components")->cascadeOnDelete();
            $table->foreignId("battery_id")->constrained("batteries")->cascadeOnDelete();
            $table->longText("description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('li_pols');
    }
};
