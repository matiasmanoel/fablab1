@extends('layouts/app')
@section('content')

<div class="container">
  <p>
      <a href="{{'/agendamento'}}"style="color:#343a40"><< Voltar </a>
  </p>
    <div class="row justify-content-center">
    <h1>Agendamento</h1>
    </div>

    {!! Form::model($agendamento, ['route' => 'agendamento.store'])  !!}

      <div class="form-group">
          {{ Form::label('Descrição', null, ['class' => 'control-label']) }}
          {{ Form::text('descricao', null, ['placeholder' => 'Preencha a Descrição', 'class' => 'form-control']) }}
          <br>

          <!-- {{ Form::label('Horario', null, ['class' => 'control-label']) }}
          {{ Form::text('horario', null, ['placeholder' => 'Preencha o Horario', 'class' => 'form-control']) }} -->

          {!! Form::label('Horario', '* Digite o Horario: ') !!}
          {!! Form::time('horario',null, ['class' => 'form-control']) !!}
          <br>

          {{ Form::label('Data', null, ['class' => 'control-label']) }}
          {{ Form::date('data', \Carbon\Carbon::today(), ['class' => 'form-control']) }}
          <br>

          <!-- Mudar depois e colocar pra inserir id o usuario automaticamente como requerente -->
          <!-- {{ Form::label('Requerente**', null, ['class' => 'control-label']) }}
          {{ Form::text('requerente', null, ['placeholder' => 'Preencha o Requerente **', 'class' => 'form-control']) }} -->

          <input name="requerente" type="hidden" value="{{Auth::user()->id}}">

          <div class="row justify-content-center">
            <div class="col-1">
              {!! Form::submit("Salvar", ['class' => 'btn btn-dark']) !!}
              {!! Form::close() !!}
            </div>
          </div>

      </div>
      <br>

</div>
@endsection
