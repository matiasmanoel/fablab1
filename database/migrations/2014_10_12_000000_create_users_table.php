<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //ESSA PARTE DEVE FAZER REFERENCIA COM AS PARTES DO CÓDIGO DAS VIEWS, ONDE TEM OS IF'S E AS VALIDAÇÕES, POIS OS NOMES LÁ SÃO IGUAIS AQUI, E AQUI É A CRIAÇÃO DAS "VARIÁVEIS" QUE RECEBEM OS VALORES
      //POR ISSO O MESMO NOME CRIADO AQUI, DEVE SER O CHAMADO LÁ, EM REGISTER.BLADE.PHP
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
