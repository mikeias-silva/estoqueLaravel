<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();
        $this->call('ProdutoTableSeeder');			
    }
}

/**
* 
*/
class ProdutoTableSeeder extends Seeder
{
	
	  public function run()
    {
        DB::insert('insert into produtos (nome, quantidade, valor, descricao)
         			values (?, ?, ?, ?)', 
         			array('geladeira', 2, 590, 
         			'side by side com gelo na porta'));

        DB::insert('insert into produtos (nome, quantidade, valor, descricao)
         			values (?, ?, ?, ?)', 
         			array('fogão', 3, 120.99,
         			'Fogão com 5 bocas'));

        DB::insert('insert into produtos (nome, quantidade, valor, descricao)
         			values (?, ?, ?, ?)', 
         			array('microondas', 5, 999.99,
         			'microondas inteligente')); 				
    }
}
