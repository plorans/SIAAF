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
        Schema::create('vacaciones_historial', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empleados_id');
            $table->string('concepto');
            $table->unsignedInteger('dias');
            $table->string('fechas');
            $table->boolean('autorizacion');
            $table->timestamps();
        });

        Schema::table('vacaciones_historial', function ($table) {
            $table->foreign('empleados_id')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_vacaciones');
    }
};
