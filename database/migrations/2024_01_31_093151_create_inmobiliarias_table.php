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
        Schema::create('inmobiliarias', function (Blueprint $table) {
            $table->char('id', 64)->primary(); // se almacena cadenas de texto fijas de tamaño 64

            $table->string('Nombre');
            $table->string('RFC');
            $table->enum('Estado', ['activo', 'inactivo'])->default('activo');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('inmobiliarias');
    }
};
