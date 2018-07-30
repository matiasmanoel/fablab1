@extends('layouts/app')
@section('content')
    <!-- @include('layouts/erros_form') -->
    <h1>Agendamento</h1>

    {!! Form::model($agendamento, ['route' => 'agendamento.store'])  !!}

      <div class="form-group">
          {{ Form::label('Descrição', null, ['class' => 'control-label']) }}
          {{ Form::text('descricao', null, ['placeholder' => 'Preencha a Descrição', 'class' => 'form-control']) }}

          {{ Form::label('Horario', null, ['class' => 'control-label']) }}
          {{ Form::text('horario', null, ['placeholder' => 'Preencha a Data', 'class' => 'form-control']) }}

          {{ Form::label('Data', null, ['class' => 'control-label']) }}
          {{ Form::date('data', \Carbon\Carbon::today(), ['class' => 'form-control']) }}

          <!-- Mudar depois e colocar pra inserir id o usuario automaticamente como requerente -->
          {{ Form::label('Requerente**', null, ['class' => 'control-label']) }}
          {{ Form::text('requerente', null, ['placeholder' => 'Preencha o Requerente **', 'class' => 'form-control']) }}
      </div>

      {!! Form::submit("Salvar", ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
