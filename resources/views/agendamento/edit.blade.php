@extends('layouts/app')
@section('content')

<div class="container">
  <p>
<<<<<<< HEAD
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
{{ Form::time('horario', $agendamento->horario, ['class' => 'form-control']) }}
<br>

{{ Form::label('Data', null, ['class' => 'control-label']) }}
{{ Form::date('data', $agendamento->data, ['class' => 'form-control']) }}
<br>

@if(Auth::user()->permissao == 1)

<div class="form-check">
  <input class="form-check-input" type="radio" name="estado" value="Confirmado" checked>
  <label class="form-check-label" for="estado1">
    Confirmado
  </label>
</br>
  <input class="form-check-input" type="radio" name="estado" value="Rever Agendamento">
  <label class="form-check-label" for="estado2">
    Rever Agendamento
  </label>
</div>

@endif

@if(Auth::user()->permissao == 0)

<input name="estado" type="hidden" value="Em Espera">

@endif


</div>

<div class="row justify-content-center">
<div class="col-1">
  {!! Form::submit("Atualizar", ['class' => 'btn btn-dark']) !!}
  {!! Form::close() !!}
</div>
</div>
=======
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
>>>>>>> parent of eefd0ae... Alterações de Styles e funcionamendo de agendamento
</div>
@endsection
