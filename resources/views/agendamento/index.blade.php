@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2>Agendamentos</h2>
    </div>

  <!-- Se usuario for Admin mostrar todos Agendamentos com todas funções -->
@if(Auth::user()->permissao == 1)
<table class="table">
  <tr>
    <th>ID</th>
    <th>Descrição</th>
    <th>Horario</th>
    <th>Data</th>
    <th>Requerente</th>
</tr>
  @foreach($agendamento as $agendamento)
    <tr>
      <td>{{ $agendamento->id }}</td>
      <td>{{ $agendamento->descricao }}</td>
      <td>{{ $agendamento->horario }}</td>
      <td>{{ $agendamento->data }}</td>
      <td>{{ $agendamento->requerente }}</td>
      <td>
        <div class="row justify-content-center">
          <div class="col-1">
            <a class="btn btn-success" href="{{ route('agendamento.edit', $agendamento) }}">Alterar</a>
          </div>
        </div>
     </td>
     <td>
       <div class="row justify-content-center">
         <div class="col-1">
     {!! Form::model($agendamento, ['class' => 'delete', 'method' => 'delete', 'route' => ['agendamento.destroy', $agendamento]])  !!}
          {!! Form::submit('Remover', ['class' => 'btn btn-success']); !!}
        {!! Form::close() !!}
      </div>
    </div>
    </tr>
  </table>
  @endforeach

  <!-- Se for um usuario mostrar -->

  @if(Auth::user()->permissao == 0)
  <table class="table">
  <tr>
    <th>Descrição</th>
    <th>Horario</th>
    <th>Data</th>
  </tr>
  @foreach($agendamento as $agendamento)
  @if($agendamento->requerente == Auth::user()->id)
  <tr>
    <td>{{ $agendamento->descricao }}</td>
    <td>{{ $agendamento->horario }}</td>
    <td>{{ $agendamento->data }}</td>
    <td>
      <a class="btn btn-default" href="{{ route('agendamento.edit', $agendamento) }}">alterar</a>
    </td>
    <td>
      {!! Form::model($agendamento, ['class' => 'delete', 'method' => 'delete', 'route' => ['agendamento.destroy', $agendamento]])  !!}
      {!! Form::submit('remover', ['class' => 'btn btn-default']); !!}
      {!! Form::close() !!}
    </td>
  </tr>
  </table>
  @endforeach



<!-- <br>
    <div class="row justify-content-center">
      <div class="col-2">
          <a class="btn btn-dark pull-right" href="{{ route('agendamento.create') }}">Cadastrar Agendamento</a>
        </div>
      </div>

</div> -->
@endsection
