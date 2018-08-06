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

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
      $agendamentos = Agendamento::all();
      return view('agendamento/index')->with(['agendamento' => $agendamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $agendamentos = new Agendamento;
      return view('agendamento/create')->with(['agendamento' => $agendamentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $agendamentos = new Agendamento;

      $this->validate($request, [

      'descricao' => 'required',

      'horario' => 'required',

      'data' => 'required',

      ]);

      $agendamentos->fill($request->all());

      $agendamentos->save();

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
      $agendamentos = Agendamento::find($id);

      return view('agendamento/edit')->with(['agendamento' => $agendamentos]);
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
      $agendamentos = Agendamento::find($id);
      $this->validate($request, [
      'descricao' => 'required',
      'horario' => 'required',
      'data' => 'required',
      ]);
      $agendamentos->fill($request->all());
      $agendamentos->save();
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
      $agendamentos = Agendamento::find($id);
      $agendamentos ->delete();
      return redirect()->route('agendamento.index');
    }
}
