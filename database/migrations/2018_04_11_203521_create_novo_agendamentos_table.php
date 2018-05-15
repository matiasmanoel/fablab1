<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovoAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novo_agendamentos', function (Blueprint $table) {
            $table->increments('id');
            //ADICIONEI OS CAMPOS ABAIXOS, FORA O "TIMESTAMPS" PARA CRIAR AS TABELAS NO BANCO, COM O COMANDO MIGRATE
            $table->string('email_requisitante');//para pegar o email do visitante
            $table->date('data_visita');//para pegar a data da visita
            $table->time('hora_visita');//para pegar a hora da visita
            $table->string('observacao');//para pegar o texto que o usuário deixar na caixa de observação
            $table->timestamps();
            //ainda não sei um meio de fazer o funcionamento das impressoras disponíveis nessa seção
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('novo_agendamentos');
    }
}
