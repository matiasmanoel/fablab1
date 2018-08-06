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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->number('cpf');
            $table->number('rg');
            $table->string('oe');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('endereco');
            $table->string('cep');
            $table->string('bairro');
            $table->string('numero');
            $table->string('cidade');
            $table->string('estado');
            $table->string('telefone');
            $table->string('celular');
            $table->integer('permissao')->default(0);
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
