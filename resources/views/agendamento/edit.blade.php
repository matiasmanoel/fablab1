@extends('layouts/app')
@section('content')
    <h1>Editar Agendamento</h1>
    {!! Form::model($agendamento, ['method' => 'put', 'route' => ['agendamento.update', $agendamento]])  !!}
      <div class="form-group">
          {{ Form::label('Descrição', null, ['class' => 'control-label']) }}
          {{ Form::text('descricao', $agendamento->descricao, ['class' => 'form-control']) }}

          {{ Form::label('Horario', null, ['class' => 'control-label']) }}
          {{ Form::text('horario', $agendamento->horario, ['class' => 'form-control']) }}

          {{ Form::label('Data', null, ['class' => 'control-label']) }}
          {{ Form::text('data', $agendamento->data, ['class' => 'form-control']) }}

          {{ Form::label('Requerente', null, ['class' => 'control-label']) }}
          {{ Form::text('requerente', $agendamento->requerente, ['class' => 'form-control']) }}}
      </div>
      {!! Form::submit("Atualizar", ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
