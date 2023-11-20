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
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->unsignedBigInteger('cliente_id');
            $table -> foreign('cliente_id')->references('id')->on('clientes');
            $table->unsignedBigInteger('hora_id');
            $table -> foreign('hora_id')->references('id')->on('horas');
            $table->unsignedBigInteger('estado_reserva_id');
            $table -> foreign('estado_reserva_id')->references('id')->on('estado_reservas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
