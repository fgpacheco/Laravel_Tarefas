<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefa::all();        
        return view('home')->with('tarefas', $tarefas);
    }
}
