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
        Schema::create('components', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("name");
            $table->string("image");
            $table->longText("description");
            $table->foreignId("diode_id")->constrained()->cascadeOnDelete();
            $table->foreignId("bypass_id")->constrained()->cascadeOnDelete();
            $table->foreignId("block_id")->constrained()->cascadeOnDelete();
            $table->foreignId("battery_id")->constrained()->cascadeOnDelete();
            $table->foreignId("li_ion_id")->constrained()->cascadeOnDelete();
            $table->foreignId("li_pol_id")->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('components');
    }
};
