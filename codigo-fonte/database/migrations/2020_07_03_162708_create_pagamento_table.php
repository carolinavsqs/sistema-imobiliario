<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamento', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('numero_contrato')->unique();
            $table->string('codigo_imovel')->unique();
            $table->string('CPF_cliente');
            $table->date('data_vencimento');
            $table->date('data_pagamento');
            $table->string('forma_pagamento');
            $table->integer('valor');
            $table->string('tipo_pagamento');
            $table->string('status');
            $table->string('multas_juros')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagamento');
    }
}
