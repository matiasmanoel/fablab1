@extends('layouts/app')
@section('content')
<a class="btn btn-primary pull-right" href="{{ route('agendamento.create') }}">Cadastrar Agendamento</a>
<h2>Agendamentos</h2>
<table class="table">
  <!-- Se usuario for Admin mostrar todos Agendamentos com todas funções -->
  @if(Auth::user()->permissao == 1)
  <tr>
    <th>ID</th>
    <th>Descrição</th>
    <th>Horario</th>
    <th>Data</th>
    <th>Requerente Id</th>
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
  @endif

<!-- Se for um usuario mostrar -->

  @if(Auth::user()->permissao == 0)
  <tr>
    <th>ID</th>
    <th>Descrição</th>
    <th>Horario</th>
    <th>Data</th>
  </tr>
  @foreach($agendamento as $agendamento)
  @if($agendamento->requerente == Auth::user()->id)
  <tr>
    <td>{{ $agendamento->id }}</td>
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
  @endif
  @endforeach
  @endif
</table>
@endsection
