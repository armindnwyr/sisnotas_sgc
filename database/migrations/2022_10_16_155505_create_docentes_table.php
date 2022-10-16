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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('dni',8);
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->enum('genero',['Masculino', 'Femenino']);
            $table->date('fechaNacimiento');
            $table->string('correo');
            $table->integer('celular')->length(9);
            $table->string('especialidad');
            $table->string('nivel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
};
