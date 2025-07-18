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
        // database/migrations/[timestamp]_create_clients_table.php
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['physical', 'moral']); // Persona física o moral
            $table->string('name');
            $table->string('rfc')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->enum('status', ['active', 'inactive', 'pending'])->default('pending');
            $table->enum('document_status', ['complete', 'incomplete'])->default('incomplete');
            $table->json('documents')->nullable();
            $table->text('notes')->nullable();
            $table->foreignId('empleado_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
