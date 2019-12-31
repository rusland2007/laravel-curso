<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Console\Helper\Table;

class CreateGrupoHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_horarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_horario');
            $table->unsignedBigInteger('id_alumno');
            $table->unsignedBigInteger('id_curso');
            $table->integer('cupo_horario');
            $table->decimal('costo_curso', 10, 2);
            $table->date('fecha_inicio_curso');
            $table->date('fecha_fin_curso');
            $table->timestamps();

            //llaves foraneas
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_horario')->references('id')->on('horarios');
            $table->foreign('id_alumno')->references('id')->on('alumnos');
            $table->foreign('id_curso')->references('id')->on('cursos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo_horarios');
    }
}
