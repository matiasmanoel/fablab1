<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditarAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editar_agendamentos', function (Blueprint $table) {
            $table->increments('id');
            //aqui vou ter que puxar as informações de um cadastro que já existe com aquele usuário, e dar a opção de alterar e salvar, como se fosse criar um novo agendamento, mas excluindo e criando
            //outro, basicamente, sem que o usuário tenha que fazer isso manualmente
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
        Schema::dropIfExists('editar_agendamentos');
    }
}
