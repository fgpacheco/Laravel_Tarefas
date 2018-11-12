@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">Tarefas</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif

					<h3>Cadastrar Tarefas</h3>
					<form action="/tarefa/cadastrar" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						
						<div class="form-group">
							<label>Nome</label>
							<input autofocus="true" name="nome" class="form-control" value="{{ old('nome') }}" placeholder="Digite o nome à tarefa"/>
						</div>

						<div class="form-group">
							<label>Data</label>
							<input type="Date" name="data" class="form-control" value="{{ old('data') }}"/>
						</div>		

						<div class="form-group">
							<label>Local</label>
							<input name="local" class="form-control cpf-mask" value="{{ old('local') }}" placeholder="Digite um local da tarefa"/>
						</div>

						<div class="form-group">
							<label>Hora</label>
							<input name="hora" class="form-control" value="{{ old('hora') }}" placeholder="Ex: HH:mm" />							
						</div>

						<div class="form-group">
							<label>Descrição</label>
							<textarea rows="4" cols="50" name="descricao" class="form-control" value="{{ old('descricao') }}" placeholder="Digite aqui uma descrição da sua tarefa...">
								
							</textarea> 
						</div>

						<br/>
						<div class=text-right>
							<button type="submit" class="btn btn-primary">Adicionar</button>
						</div>

						
					</form>
				</div>


			</div>
		</div>
	</div>
</div>


@endsection


<script>
jQuery(function($){
$("#campoHora").mask("99:99");
});
</script>
