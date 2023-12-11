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
        Schema::create('Peliculas', function(Blueprint $table){
            $table->id();
            $table->string('titulo');
            $table->integer('duracion');
            $table->text('sinopsis');
            $table->text('imagen');
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_director');

            $table->foreign('id_director')->references('IDDirector')->on('directores');
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Peliculas');
    }
};
