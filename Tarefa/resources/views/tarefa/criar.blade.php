@extends('layouts.master')
@section('content')
{{ Form::open(array('action' => 'TarefaController@salvar')) }}
<div class="form-group">
    {!! Form::label('nome', 'Nome:', ['class' => 'control-label']) !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('descricao', 'Descrição:', ['class' => 'control-label']) !!}
    {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('status', 'Aberta', ['class' => 'control-label']) !!}
    {!! Form::radio('status', 'Aberta', true) !!}
    {!! Form::label('status', 'Concluída', ['class' => 'control-label']) !!}
    {!! Form :: radio ( 'status', 'Concluida') !!}
</div>

{!! Form::submit('Criar nova tarefa', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@stop