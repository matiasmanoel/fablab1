@extends('layouts/app')
@section('content')

    <h1>Agendamento</h1>

    {!! Form::model($agendamento, ['route' => 'agendamento.store'])  !!}

      <div class="form-group">
          {{ Form::label('Descrição', null, ['class' => 'control-label']) }}
          {{ Form::text('descricao', null, ['placeholder' => 'Preencha a Descrição', 'class' => 'form-control']) }}

          <!-- {{ Form::label('Horario', null, ['class' => 'control-label']) }}
          {{ Form::text('horario', null, ['placeholder' => 'Preencha o Horario', 'class' => 'form-control']) }} -->

          {!! Form::label('Horario', '* Digite o Horario: ') !!}
          {!! Form::time('horario',null, ['class' => 'form-control']) !!}

          {{ Form::label('Data', null, ['class' => 'control-label']) }}
          {{ Form::date('data', \Carbon\Carbon::today(), ['class' => 'form-control']) }}

          <!-- Mudar depois e colocar pra inserir id o usuario automaticamente como requerente -->
          <!-- {{ Form::label('Requerente**', null, ['class' => 'control-label']) }} -->
          <!-- {{ Form::text('requerente', null, ['placeholder' => 'Preencha o Requerente **', 'class' => 'form-control']) }} -->
          <input name="requerente" type="hidden" value="{{Auth::user()->id}}">
      </div>

      {!! Form::submit("Salvar", ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
