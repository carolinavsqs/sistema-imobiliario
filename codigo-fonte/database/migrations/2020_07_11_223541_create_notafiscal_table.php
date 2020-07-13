<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotafiscalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_fiscal', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('CPF_funcionario')->unique();
            $table->string('CPF_cliente')->unique();
            $table->string('numero_contrato')->unique();
            $table->string('codigo_imovel');
            $table->date('data_vencimento');
            $table->date('data_pagamento');
            $table->integer('valor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notafiscal');
    }
}
