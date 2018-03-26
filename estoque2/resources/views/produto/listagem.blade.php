@extends('layout/principal')

@section('conteudo')

@if(empty($produtos))
<div class="container alert alert-danger col-md-4">
	Voce nao tem nenhum produto cadastrado
</div>
@else

<div class="container">
	<h1 class="text text-center">Listagem de Produtos - laravel</h1>
</div>


<table class="table table-hover">

	<thead class="thead-dark">
		<th>Nome</th>
		<th>Valor</th>
		<th>Qtd</th>
		<th>Descição</th>
		<th></th>
		<th></th>
	</thead>
	@foreach($batata as $p)
	<thead>
		<tbody>
			<tr class="{{ $p->quantidade<=2 ? 'alert alert-danger' : '' }}">
				<!--<th>header</th>-->
				<td>{{ $p->nome }}</td>
				<td>{{ $p->valor }}</td>
				<td>{{ $p->quantidade }}</td>
				<td>{{ $p->descricao }}</td>
				<td><a href="/produtos/mostra/{{$p->id}}"><button type="button" class="btn btn-secondary">Detalhes</button></a>
				</td>
				<td><a href="/produtos/remove/{{ $p->id }}"><button class="btn btn-danger">Remover</button></a>
				</td>
			</tr>
		</tbody>
	</thead>
	@endforeach
</table>

@endif

@if(old('nome'))
<div class="alert alert-success">
	<p>O produto "{{old('nome')}}" foi adicionado com <b>sucesso</b></p>
</div>
@endif
<h4>
	<p class="text-danger text-right">
		Um ou menos itens no estoque
	</p>
</h4>
@endsection