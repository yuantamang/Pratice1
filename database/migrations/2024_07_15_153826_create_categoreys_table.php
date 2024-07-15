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
            $table->foreignId("bulb_id")->constrained()->cascadeOnDelete();
            $table->foreignId("large_bulb_id")->constrained()->cascadeOnDelete();
            $table->foreignId("small_bulb_id")->constrained()->cascadeOnDelete();
            $table->foreignId("wire_id")->constrained()->cascadeOnDelete();
            $table->foreignId("thin_wire_id")->constrained()->cascadeOnDelete();
            $table->foreignId("thick_wire_id")->constrained()->cascadeOnDelete();
            $table->foreignId("booster_id")->constrained()->cascadeOnDelete();
            $table->foreignId("dc_to_dc_id")->constrained()->cascadeOnDelete();
            $table->foreignId("ac_to_ac_id")->constrained()->cascadeOnDelete();
            $table->foreignId("component_id")->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('categoreys');
    }
};
