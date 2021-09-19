<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('numero_processo');
            $table->string('nome');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->string('estado_civil');
            $table->string('naturalidade');
            $table->string('data_nascimento');
            $table->string('bilhete');
            $table->string('local_emissao');
            $table->string('contacto');
            $table->unsignedBigInteger('carta_id');
            $table->unsignedBigInteger('turma_id');
            $table->string('tipo_pagamento');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('carta_id')->references('id')->on('cartas')->onDelete('cascade');
            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
