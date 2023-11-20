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
        Schema::create('campos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',50);
            $table->integer('capacidad');
            $table->float('precio_hora');
            $table->string('descripcion');
            $table->boolean('activo')->default(1);
            $table->unsignedBigInteger('estado_campo_id');
            $table -> foreign('estado_campo_id')->references('id')->on('estado_campos');
            $table->unsignedBigInteger('tipo_id');
            $table -> foreign('tipo_id')->references('id')->on('tipo_deportes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campos');
    }
};
