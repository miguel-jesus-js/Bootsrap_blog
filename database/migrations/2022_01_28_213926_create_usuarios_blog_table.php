<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_blog', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 25);
            $table->string('app', 20);
            $table->string('apm', 20);
            $table->string('sexo', 9);
            $table->string('nombre_user', 15)->unique();
            $table->string('correo', 30)->unique();
            $table->string('contrasena', 15);
            $table->string('foto_perfil', 150);
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
        Schema::dropIfExists('usuarios_blog');
    }
}
