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
            $table->id();
            $table->string('instructor');
            $table->string('categoria');
            $table->string('duracion')->nullable();;
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('precio');
            $table->string('estatus')->default('0');
            $table->string('imagen')->default('default_curso.webp');;
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
        Schema::dropIfExists('cursos');
    }
}
