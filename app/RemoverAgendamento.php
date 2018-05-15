<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RemoverAgendamento extends Model
{
    //isso quer dizer que RemoverAgendamento, pode conter vários agendamentos(no caso, eu imagino que os agendamentos que eu fizer em NovoAgendamento, vai ficar armazenado em Agendamento);
    public function agendamentos(){
        return $this->hasMany('App\Agendamento');//ou seja, uma relação de 1 para muitos, n sei ao certo ainda.
    }
}
