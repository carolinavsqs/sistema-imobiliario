<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Imovel', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('CPF_dono_imovel')->unique();
            $table->string('tipo_imovel');
            $table->string('CEP');
            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->integer('numero');
            $table->string('complemento')->nullable();
            $table->string('estado');
            $table->string('tipo_contrato');
            $table->integer('valor_venda');
            $table->integer('valor_aluguel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imovel');
    }
}
