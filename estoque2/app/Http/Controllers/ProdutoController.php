<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Produto;
use Request;
use App\Http\Requests\ProdutosRequest;
/**
* 
*/
class ProdutoController extends Controller
{
	
	public function lista(){
		
		//$produtos = DB::select('select * from produtos');
		$produtos = Produto::all(); //mesma coisa q select * from tabela"produtos"
		//$produtos = Produto::only('nome');
		return view('produto.listagem')->with('batata', $produtos);
		//return view('listagem')->withProdutos($produtos);

	}

	public function mostra($id){

		//$id = Request::route('id');
		//$resposta = DB::select('select * from produtos where id = ?', [$id]);
		
		//mesmo resultado da linha acima, porém sem utilizar array
		$produto = Produto::find($id); 

		if (empty($resposta)) {
			return view('prod_nexiste');
		}

		//return view('produto.detalhes')->with('p', $resposta[0]);
		return view('produto.detalhes')->with('p', $resposta);
	}


	public function novo(){
		return view('produto.formulario');
	}

	public function adiciona(ProdutosRequest $request){
		// pegar dados do formulario
		// salvar no banco de dados
		// retornar alguma view

		//$produto = new Produto(); //usando produto->save() é preciso instanciar um produto e popular

/*

		$nome = Request::input('nome');
		$descricao = Request::input('descricao');
		$valor = Request::input('valor');
		$quantidade = Request::input('quantidade');



		//$implode = implode( ', ', array($nome, $descricao, $valor, $quantidade));

		//DB::insert('insert into produtos (nome, descricao, valor, quantidade)
		//	values (?, ?, ?, ?)', array($nome, $descricao, $valor, $quantidade));

		$produto->save(): //mesma coisa que insert into

		$params = Request::all();
		Produto::create($params);
*/

		//ou ignorando tudo o anterior e com algumas linhas de codigo fica
		//ele pega tudo da request q esta definida no 'Produto model' e salva no banco


		//Produto::create(Request::all()); // pega os campos do form e add no BD em uma linha

		Produto::create(Request::all());


		return redirect()->route('apelido')
		->withInput(Request::only('nome'));
	}

	public function listaJson(){
		//$produtos = DB::select('select * from produtos');
		$produtos = Produtos::all(); //mesma coisa q select * from tabela"produtos"

		return response()->download($Desktop);
	}

	public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();

		return redirect()->route('apelido');
	}
}
