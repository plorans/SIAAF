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
        Schema::create('nomina_complemento_deduccion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empleados_id');
            $table->unsignedInteger('faltas');
            $table->unsignedInteger('deduccion');
            $table->unsignedInteger('vacaciones');
            $table->unsignedInteger('retardos');
            $table->unsignedInteger('adelanto');
            $table->unsignedInteger('prestamo');
            $table->unsignedInteger('comedor');
            $table->unsignedInteger('imss_isr');
            $table->unsignedInteger('isr_asimilado');
            $table->unsignedInteger('total');
            $table->timestamps();
        });

        Schema::table('nomina_complemento_deduccion', function ($table) {
            $table->foreign('empleados_id')->references('id')->on('empleados');
        });;
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nomina_complemento_deduccion');
    }
};
