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
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->float('monto');
            $table->unsignedBigInteger('metodo_pago_id');
            $table -> foreign('metodo_pago_id')->references('id')->on('metodo_pagos');
            $table->unsignedBigInteger('estado_pago_id');
            $table -> foreign('estado_pago_id')->references('id')->on('estado_pagos');
            $table->unsignedBigInteger('reserva_id');
            $table -> foreign('reserva_id')->references('id')->on('reservas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
