<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtefatosTitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artefatos_titulos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artefato_id');
            $table->unsignedBigInteger('titulo_id');
            $table->text('descricao')->nullable();
            $table->foreign('artefato_id')->references('id')->on('artefatos');
            $table->foreign('titulo_id')->references('id')->on('titulos');
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
        Schema::dropIfExists('artefatos_titulos');
    }
}
