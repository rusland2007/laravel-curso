<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('item_usuario');
            $table->string('name');
            $table->string('nombre_usuario', 50);
            $table->string('apellido_usuario', 50);
            $table->string('email_usuario',60)->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password_usuario');
            $table->string('estado_usuario', 100);
            $table->string('key_usuario', 100);
            $table->date('fecha_nac_usuario');


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
        Schema::dropIfExists('usuarios');
    }
}
