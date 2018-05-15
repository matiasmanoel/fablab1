<?php

use Illuminate\Database\Seeder;

class NovoAgendamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $novo_agendamentos = [
          0 => [
            'email_requisitante' => 'hchga@hotmail.com',
            'data_visita' => '',
            'hora_visita' => '',
            'observacao' => 'safasfsafasf'
          ]
        ]
        DB::table('novo_agendamentos')->insert();//ta dando erro esse DB, parece que o comando mudou
    }
}
