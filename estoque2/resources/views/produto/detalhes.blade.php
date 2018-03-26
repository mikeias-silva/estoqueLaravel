@extends('layout/principal')

@section('conteudo')
	<h1 class="font-weight-bold">Detalhes do Produto {{$p->nome}}</h1>
	<ul class="list-group">
		<li>Nome: {{$p->nome}}</li>
		<li>Valor: R$ {{$p->valor}}</li>
		<li>Quantidade: {{$p->quantidade}}</li>
		<li>Descrição: {{$p->descricao or 'Descrição não informada'}}</li>

	</ul>
@endsection