<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInscricaosTable extends Migration 
{

	public function up()
	{
		Schema::create('inscricaos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome');
			$table->string('rg');
			$table->string('cpf');
			$table->string('nascimento');
			$table->string('sexo');
			$table->string('email');
			$table->string('telefone');
			$table->string('instituicao');
			$table->string('cep');
			$table->string('endereco');
			$table->string('numero');
			$table->string('complemento');
			$table->string('bairro');
			$table->string('cidade');
			$table->string('estado');
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
		});
	}

	public function down()
	{
		Schema::dropIfExists('inscricaos');
	}

}
