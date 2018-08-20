<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agendamento;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Auth;


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

      // Mail::send('emails.aviso', [], function($message){
      //   $message->to(Auth::user()->email);
      //   $message->subject('Agendamento Criado');
      // });

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
      //ALTERAR FUNÇÃO PARA ENVIAR EMAIL AVISANDO DA ALTERAÇÃO PARA O AGENDADOR

      $agendamentos = Agendamento::find($id);
      $requerente = User::find($agendamentos->requerente);
      $this->validate($request, [
      'descricao' => 'required',
      'horario' => 'required',
      'data' => 'required',
      'requerente' => 'required'
      ]);
      $agendamentos->fill($request->all());
      $agendamentos->save();
      Mail::send('emails.aviso', [], function($message){
        $message->to($requerente->email);
        $message->subject('Estado Agendamento Atualizado');
      });
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
