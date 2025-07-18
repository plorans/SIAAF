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
        Schema::create('vacaciones_solicitud', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empleados_id');
            $table->string('tipo');
            $table->unsignedInteger('periodo');
            $table->unsignedInteger('vac_disponibles');
            $table->unsignedInteger('vac_restantes');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->double('prima');
            $table->text('obdervaciones');
            $table->boolean('autorizacion');
            $table->timestamps();
        });

        Schema::table('vacaciones_solicitud', function ($table) {
            $table->foreign('empleados_id')->references('id')->on('empleados');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacaciones_solicitud');
    }
};
