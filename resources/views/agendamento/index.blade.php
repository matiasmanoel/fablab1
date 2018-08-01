@extends('layouts/app')
@section('content')
<a class="btn btn-primary pull-right" href="{{ route('agendamento.create') }}">Cadastrar Agendamento</a>
<h2>Agendamentos</h2>
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
            <a class="btn btn-default" href="{{ route('agendamento.edit', $agendamento) }}">alterar</a>
     </td>
     <td>
     {!! Form::model($agendamento, ['class' => 'delete', 'method' => 'delete', 'route' => ['agendamento.destroy', $agendamento]])  !!}
          {!! Form::submit('remover', ['class' => 'btn btn-default']); !!}
        {!! Form::close() !!}
</td>
    </tr>
  @endforeach
</table>
@endsection
