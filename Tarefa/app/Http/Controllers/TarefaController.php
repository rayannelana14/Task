<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class TarefaController extends Controller
{
    //Chamada da função home
    public function home()
    {    	
        $tarefa = Tarefa::all();
        return view('pages.home')->withTarefa($tarefa);
    }

    //Chama a view para criar tarefa
    public function criar()
    {
    	return view('tarefa.criar');
    }  

    //A view responsavél pela criação da tarefa, chama esse controller para armazenar os dados
   public function salvar(Request $request)
    {

        $tarefa = new Tarefa;
        $tarefa->nome = $request->nome;
        $tarefa->descricao = $request->descricao;
        $tarefa->status = $request->status;
        $tarefa->save();
        return redirect()->back();
    }

    //Chama a view para edição de tarefas
    public function editar($id)
    {
        $tarefa = Tarefa::find($id);
        return view('tarefa.editar')->withTarefa($tarefa);
    }

    //Controller utilizado para atualizar os dados na base
    public function atualizar($id, Request $request)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->status = $request->status;
        $tarefa->save();
        return redirect()->back();

    }
   
}
