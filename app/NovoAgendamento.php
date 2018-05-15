<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NovoAgendamento extends Model
{
    //ADICIONEI OS CAMPOS ABAIXO, NA ULTIMA VEZ QUE MEXI (11/04/2018)
    // protected $table = 'novo_agendamentos';
    //
    // protected $fillable = [
    //   'email_requisitante', 'data_visita', 'hora_visita', 'observacao',
    // ];

    //fiz o agendamento, inserindo os dados pelo Tinker (php artisan tinker), o shell basicamente, foi a única forma que tentei/fiz por enquanto, só pra testar mesmo, funcionou, está no banco
    public function novo_agendamentos(){

    }
}
