@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-right" >                                        
                    <a class="btn btn-primary" href="/tarefa/novo">Cadastrar Tarefa</a>                    
                </div>
                <br/>
                
                <form method="get" action="/tarefa/pesquisar">
                    <div class="form-group col-lg-3">
                        <input type="text" name="nome" class="form-control" placeholder="Pesquisar..." />

                    </div>    


                    @if (count($tarefas) == 0)
                        {{ $pesquisa }} 
                    @endif

                </form>
                
            </div>        

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                @if(empty($tarefas))
                <div class="alert alert-info">
                    Nenhuma tarefa definida.
                </div>

                @else
                <h4 class="font-italic">Tarefas</h4>                    
                <table class="table table-hover">
                    <tr class="text-primary font-weight-bold">
                        <td>Nome</td>
                        <td>Local</td>
                        <td>data</td>
                        <td>Ação</td>
                    </tr>
                    @foreach ($tarefas as $t)
                    <tbody>
                        <tr>
                            <td> {{ $t->nome }} </td>
                            <td> {{ $t->local }} </td>
                            <td> {{ \Carbon\Carbon::parse($t->data)->format('d/m/Y')}} </td>                                                        
                            <td> 
                                <a href="{{action('TarefaController@remover', $t->id)}}"> 
                                    Excluir 
                                </a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            @endif               


        </div>
    </div>
</div>
</div>
</div>
@endsection
