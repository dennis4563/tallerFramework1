<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTableCreate=libros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
            Schema::create('libros', function (Blueprint $table) {
                $table->string('Nombre');
                $table->string('Resumen');
                $table->number('NO.paginas');
                $table->text('Edicion');
                $table->string('Autor');
                $table->string('Precio');
                $table->string('Editar');
                $table->timestamps();
            }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
