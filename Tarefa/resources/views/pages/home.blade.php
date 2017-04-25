@extends('layouts.master')

@section('content')

<h1>Bem Vindo</h1>
<p class="lead">Aqui a lista de todas as tarefas <a href="{{ action('TarefaController@criar')}}" >Adicionar nova tarefa?</a></p>

@foreach($tarefa as $task)
    <h3>{{ $task->nome }}</h3>
    <p>Descrição: {{ $task->descricao}}</p>
    <p>Status: {{ $task->status}}</p>
    <p>
        <a href="{{ action('TarefaController@editar', ['id' => $task->id])}}" class="btn btn-primary">Editar Tarefa</a>
    </p>
@endforeach

@stop