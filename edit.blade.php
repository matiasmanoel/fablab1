@extends('layouts/app')
@section('content')

<div class="container">
  <p>
      <a href="{{'/agendamento'}}"style="color:#343a40"><< Voltar </a>
  </p>
    <div class="row justify-content-center">
    <h1>Editar Agendamento</h1>
    </div>
    {!! Form::model($agendamento, ['method' => 'put', 'route' => ['agendamento.update', $agendamento]])  !!}
      <div class="form-group">
          {{ Form::label('Descrição', null, ['class' => 'control-label']) }}
          {{ Form::text('descricao', $agendamento->descricao, ['class' => 'form-control']) }}
          <br>

          {{ Form::label('Horario', null, ['class' => 'control-label']) }}
          {{ Form::text('horario', $agendamento->horario, ['class' => 'form-control']) }}
          <br>

          {{ Form::label('Data', null, ['class' => 'control-label']) }}
          {{ Form::text('data', $agendamento->data, ['class' => 'form-control']) }}
          <br>
          <!-- {{ Form::label('Requerente', null, ['class' => 'control-label']) }}
          {{ Form::text('requerente', $agendamento->requerente, ['class' => 'form-control']) }} -->
      </div>
      <div class="row justify-content-center">
        <div class="col-1">
          {!! Form::submit("Atualizar", ['class' => 'btn btn-dark']) !!}
          {!! Form::close() !!}
        </div>
      </div>
</div>
@endsection
