<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePalestrasTable extends Migration 
{

	public function up()
	{
		Schema::create('palestras', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome');
			$table->string('horario');
			$table->string('carga_horaria');
			$table->string('Palestrante');
			$table->string('data');
			$table->string('valor');
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
		});
	}

	public function down()
	{
		Schema::dropIfExists('palestras');
	}

}
