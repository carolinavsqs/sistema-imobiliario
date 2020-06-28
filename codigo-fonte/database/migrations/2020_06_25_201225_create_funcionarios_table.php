<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->string('cargo');
            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->integer('numero');
            $table->string('complemento')->nullable();
            $table->string('estado');
            $table->date('aniversario');
            $table->string('phone');
            $table->string('email');
            $table->string('senha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
