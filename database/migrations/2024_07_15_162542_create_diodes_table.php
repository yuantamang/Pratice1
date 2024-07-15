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
        Schema::create('diodes', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("name");
            $table->string("image");
            $table->foreignId("bypass_id")->constrained()->cascadeOnDelete();
            $table->foreignId("block_id")->constrained()->cascadeOnDelete();
            $table->longText("description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diodes');
    }
};
