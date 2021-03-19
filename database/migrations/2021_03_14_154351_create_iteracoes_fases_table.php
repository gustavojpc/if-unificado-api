<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIteracoesFasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iteracoes_fases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iteracao_id');
            $table->unsignedBigInteger('fase_id');
            $table->integer('esforco')->default(rand(1,100));
            $table->timestamps();
            $table->foreign('iteracao_id')->references('id')->on('iteracoes');
            $table->foreign('fase_id')->references('id')->on('fases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iteracoes_fases');
    }
}
