<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtefatosTitulosSubtitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artefatos_titulos_subtitulos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artefato_titulo_id');
            $table->unsignedBigInteger('subtitulo_id');
            $table->text('descricao')->nullable();
            $table->foreign('artefato_titulo_id')->references('id')->on('artefatos_titulos');
            $table->foreign('subtitulo_id')->references('id')->on('subtitulos');
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
        Schema::dropIfExists('artefatos_titulos_subtitulos');
    }
}
