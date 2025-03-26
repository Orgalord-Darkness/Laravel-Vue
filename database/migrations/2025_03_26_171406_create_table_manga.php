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
        Schema::create('manga', function (Blueprint $table) {
            $table->id();
            $table->string('titre'); 
            $table->text('synopsis'); 
            $table->foreign('id_image')->references('id')->on('image')->onDelete('cascade'); // Clé étrangère
            $table->int('limite_age'); 
            $table->string('auteur'); 
            $table->float('prix'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manga');
    }
};
