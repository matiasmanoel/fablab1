<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\NovoAgendamento; //VER SE FUNCIONA COM OU SEM ISSO DEPOIS

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //estou utilizando este construtor para restringir o acesso à "agendamento" apenas para pessoas logadas.

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        return view('agendamento');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
      // return NovoAgendamento::create([
      //     'email_requisitante' => $data['email_requisitante'],
      //     'data_visita' => $data['data_visita'],
      //     'hora_visita' => $data['hora_visita'],
      //     'observacao' => $data['observacao']
      // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      ////Pega todos os dados que vem do formulário
      //$dataForm = $request->all();
      //FAZ O CADASTRO



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
