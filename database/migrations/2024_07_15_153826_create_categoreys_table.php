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
            $table->string("title");
            $table->string("name");
            $table->longText("description");
            $table->string("image");
            $table->foreignId("bulb_id");
            $table->foreignId("large_bulb_id");
            $table->foreignId("small_bulb_id");
            $table->foreignId("wire_id");
            $table->foreignId("thin_wire_id");
            $table->foreignId("thick_wire_id");
            $table->foreignId("booster_id");
            $table->foreignId("dc_to_dc_id");
            $table->foreignId("ac_to_ac_id");
            $table->foreignId("component_id");
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
