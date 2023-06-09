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
        Schema::create('lugares', function (Blueprint $table){
            $table->id();
            $table->string('nombre',100);
            $table->text('descripcion');
            $table->string('departamento');
            $table->string('eslogan');
            $table->string('estado');
            $table->float('monto');
            $table->string('horario');
            $table->string('duracion');
            $table->string('punto_encuentro');
            $table->string('llevar');
            $table->string('no_cuenta');
            $table->string('imagen');
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lugares');
    }
};
