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
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion',350);
            $table->date('fecha_inicion');
            $table->date('fecha_fin');
            $table->float('costo');
            $table->boolean('activo')->default(1);
            $table->unsignedBigInteger('campo_id');
            $table -> foreign('campo_id')->references('id')->on('campos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mantenimientos');
    }
};
