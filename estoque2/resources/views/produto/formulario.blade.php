@extends('layout/principal')

@section('conteudo')

<h1>Novo produto</h1>

@if(count($errors)>0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>
</div>
@endif

<form action="/produtos/adiciona" class="form-group" method="post">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

	<label for="">Nome</label>
	<input name="nome" class="form-control" type="text" value="{{ old('nome') }}" / >
	<label for="">Descição</label>
	<input name="descricao" class="form-control" type="text" value="{{ old('descricao') }}"/>
	<label for="">Valor</label>
	<input type="" name="valor" class="form-control" value="{{ old('valor') }}"/>
	<label for="">Quantidade</label>
	<input name="quantidade" type="number" name="quantidade" class="form-control" value="{{ old('quantidade') }}"/>
	<button type="submit" class="btn btn-primary btn-clock">Enviar</button>


</form>
@endsection