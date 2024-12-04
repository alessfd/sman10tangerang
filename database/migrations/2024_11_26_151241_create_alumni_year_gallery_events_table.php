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
        Schema::create('alumni_year_gallery_event', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alumni_year_id')->references('id')->on('alumni_years')->onDelete('cascade');
            $table->foreignId('gallery_event_id')->references('id')->on('gallery_events')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_year_gallery_event');
    }
};
