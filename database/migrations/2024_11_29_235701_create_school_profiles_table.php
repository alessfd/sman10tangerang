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
        Schema::create('school_profiles', function (Blueprint $table) {
            $table->id();
            $table->string("visi", 2040);
            $table->json("misi");
            $table->string("name", 40);
            $table->string("npsn", 10);
            $table->string("address", 2074);
            $table->string("email", 30);
            $table->string("phone_number", 11);
            $table->string("description", 2074)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_profiles');
    }
};
