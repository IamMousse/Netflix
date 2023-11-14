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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 100);
            $table->string('resumer', 5000);
            $table->integer('duree');
            $table->year('annee');
            $table->string('trailer', 1000);
            $table->string('pochetteURL', 1000);
            $table->double('rating');
            $table->foreignId('realisateur_id');
            $table->foreignId('producteur_id');
            $table->foreignId('acteur_id');
            $table->string('genre', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
