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
        Schema::table('medico_prueba_paciente', function (Blueprint $table) {
            $table->unsignedBigInteger('medico_id')->nulllable();
            $table->unsignedBigInteger('paciente_id')->nulllable();
            $table->unsignedBigInteger('prueba_id')->nulllable();
            $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('cascade');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->foreign('prueba_id')->references('id')->on('pruebas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
