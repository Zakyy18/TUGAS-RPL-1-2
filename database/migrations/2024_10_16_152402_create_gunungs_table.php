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
        Schema::create('gunungs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_gunung'); // Nama gunung
            $table->text('deskripsi'); // Deskripsi gunung
            $table->boolean('status_buka'); // Status buka (true = buka, false = tutup)
            $table->string('link_booking')->nullable(); // Link untuk booking SIMAKSI
            $table->timestamps(); // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gunungs');
    }
};
