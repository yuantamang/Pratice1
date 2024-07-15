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
        Schema::create('bulbs', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("name");
            $table->string("image");
            $table->longText("description");
            $table->foreignId("large_buld_id");
            $table->foreignId("samll_bulb_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bulbs');
    }
};
