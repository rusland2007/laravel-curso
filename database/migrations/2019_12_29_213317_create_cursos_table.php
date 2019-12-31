<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_area');
            $table->foreign('id_area')->references('id')->on('areas');
            $table->string('nombre_curso' , 100);
            $table->mediumText('descripcion_curso' );
            $table->integer('estado_curso' );
            $table->timestamps();
            /**
             * id_area              int not null,
   nombre_curso         char(100),
   descripcion_curso    text,
   estado_curso         int,
   area_curso           int, */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
