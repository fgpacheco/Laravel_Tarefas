<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class TarefaController extends Controller
{
    public function novo() 
    {
    	return view('cadastrarTarefa');
    }

    public function cadastrar(Request $request)
    {
    	$tarefa = new Tarefa();
    	$tarefa->nome = $request->nome;
    	$tarefa->descricao = $request->descricao;
    	$tarefa->local = $request->local;
    	$tarefa->data = $request->data;
    	$tarefa->hora = $request->hora;

    	$tarefa->save();

    	return redirect("/home");
    }

    public function remover($id)
    {
    	$tarefa = Tarefa::find($id);
        $tarefa->delete();
        return redirect("/home");
    }

    public function pesquisar(Request $request)
    {
        $tarefas = Tarefa::where('nome', 'like', "%".$request->nome."%")->get();                        
        $pesquisa = 'texto "' . $request->nome .' " não encotrado.';
        return view('/home', ['tarefas' => $tarefas, 'pesquisa' => $pesquisa]);
    }



}
