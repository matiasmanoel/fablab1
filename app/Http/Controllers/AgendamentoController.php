<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agendamento;

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
      $agendamento = Agendamento::all();
      return view('agendamento/index')->with(['agendamento' => $agendamento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
      $agendamento = new Agendamento;
      return view('agendamento/create')->with(['agendamento' => $agendamento]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $agendamento = new Agendamento;

      $this->validate($request, [

      'descricao' => 'required',

      'horario' => 'required',

      'data' => 'required',

      'requerente' => 'required'

      ]);

      $agendamento->fill($request->all());

      $agendamento->save();

      return redirect()->route('agendamento.index');
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
      $agendamento = Agendamento::find($id);

      return view('agendamento/edit')->with(['agendamento' => $agendamento]);
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
      $agendamento = Agendamento::find($id);
      $this->validate($request, [
      'descricao' => 'required',
      'horario' => 'required',
      'data' => 'required',
      'requerente' => 'required'
      ]);
      $agendamento->fill($request->all());
      $agendamento->save();
      return redirect()->route('agendamento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $agendamento = Agendamento::find($id);
      $agendamento ->delete();
      return redirect()->route('agendamento.index');
    }
}
