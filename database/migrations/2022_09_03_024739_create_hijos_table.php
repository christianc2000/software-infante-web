<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hijos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->String('apellido');
            $table->String('celular');
            //$table->String('sexo')->nullable();
            $table->String('alias');
            //$table->unsignedSmallInteger('edad');
            $table->foreignId('id_tutor')->references('id')->on('tutores');

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
        Schema::dropIfExists('hijos');
    }
}
