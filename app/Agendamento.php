<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
  protected $table = 'agendamento';

  protected $fillable = [
    'descricao', 'horario', 'data', 'requerente', 'estado'
  ];
// $fillabe

   public function users()
   {
       return $this->belongsTo('App\User');
   }
}
