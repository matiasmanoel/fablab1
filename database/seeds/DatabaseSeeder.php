<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //serve para inserir dados diretos, por exemplo, criei uma tabela "x" e quero adicionar 20 elementos de uma vez
        //utilizando o comando "php artisan make:seeder NomedaSeeder", o laravel irá criar um arquivo em seeds, que servirá para adicionar dados ao banco diretamente, por exemplo
        // public functon run(){
        //   $carros = [
        //       0 =>[ //POSIÇÃO DO ARRAY
        //         'nome' => 'Voyage'
        //         'placa' => 'FSA-2312'
        //       ]
        //       1 =>[ //POSIÇÃO DO ARRAY
        //         'nome' => 'Gol'
        //         'placa' => 'FSA-2312'
        //       ]
        //
        //     ];
        //   DB::table('carros')->insert();
        //   //Especificar no arquivo "DatabaseSeeder"(no caso nessa pasta) que existe um arquivo chamado CarroSeeder(Exemplo), (esses arquivos são criados com o comando passado no comentário acima),
        //   //que dever ser rodado toda vez que chamar o DatabaseSeeder, com o comando "$this->call('CarroSeeder');"
        //   //toda vez que eu rodar a seeder, ele vai inserir esses dois arrays
        //   //com o comando php artisan db:seed, ele vai executar a inserção dos dados.
        // }

        $this->call('NovoAgendamentoSeeder');
    }
}
