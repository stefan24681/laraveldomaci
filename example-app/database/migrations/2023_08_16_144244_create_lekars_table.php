<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lekars', function (Blueprint $table) {
            $table->id();

            $table->string('Ime');
            $table->string('Prezime');
            $table->integer('Licenca');
            $table->string('Specijalnost');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lekars');
    }
};