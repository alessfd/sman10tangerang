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
            $table->string("visi", 2074);
            $table->string("misi", 2074);
            $table->string("name", 40);
            $table->integer("npsn");
            $table->string("address", 2074);
            $table->string("email", 30);
            $table->integer("phone_number");
            $table->string("description", 2074);
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
