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
        Schema::create('boosters', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("name");
            $table->string("image");
            $table->foreignId("dc_to_dc_id")->constrained()->cascadeOnDelete();
            $table->foreignId("ac_to_ac_id")->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boosters');
    }
};
