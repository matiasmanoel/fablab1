@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2>Agendamentos</h2>
    </div>
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
</td>
    </tr>
  @endforeach
</table>
<br>
    <div class="row justify-content-center">
      <div class="col-2">
          <a class="btn btn-dark pull-right" href="{{ route('agendamento.create') }}">Cadastrar Agendamento</a>
        </div>
      </div>

</div>
@endsection
