<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('curriculums', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('apellidos');
        $table->text('datos_personales');
        $table->text('habilidades');
        $table->text('idiomas');
        $table->string('profesion');
        $table->text('experiencia_profesional');
        $table->text('historial_academico');
        $table->text('formacion_complementaria')->nullable();
        $table->text('otros_datos')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curricula');
    }
};
