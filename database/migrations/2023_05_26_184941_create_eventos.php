<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->text('fechEvent');
            $table->text('nomEvent');
            $table->text('Suite');
            $table->text('NumColaborador');
            $table->text('NombreColaborador');
            $table->text('puesto');
            $table->text('pago');
            $table->text('pax');
            $table->text('asistencia');
            $table->text('observaciones');
            $table->text('firma')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
