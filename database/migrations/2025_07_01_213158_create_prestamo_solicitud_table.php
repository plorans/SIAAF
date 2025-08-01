<<?php

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
        Schema::create('prestamo_solicitud', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('is_empleado');
            $table->date('fecha_solicitud');
            $table->unsignedInteger('monto_pedido');
            $table->unsignedBigInteger('id_estatus');
            $table->timestamps();
        });

        Schema::table('prestamo_solicitud', function ($table) {
            $table->foreign('is_empleado')->references('id')->on('empleados');
        });

        Schema::table('prestamo_solicitud', function ($table) {
            $table->foreign('id_estatus')->references('id')->on('cat_estatus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamo_solicitud');
    }
};
