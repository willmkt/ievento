<?php 

class InscricaosTableSeeder extends DatabaseSeeder 
{

	public function run()
	{
		$faker = $this->getFaker();

		for($i = 1; $i <= 10; $i++) {
			$inscricao = array(
				'nome' => $faker->word,
				'rg' => $faker->randomDigitNotNull,
				'cpf' => $faker->randomDigitNotNull,
				'nascimento' => $faker->randomDigitNotNull,
				'sexo' => $faker->boolean,
				'email' => $faker->email,
				'telefone' => $faker->randomDigitNotNull,
				'instituicao' => $faker->word,
				'cep' => $faker->word,
				'endereco' => $faker->word,
				'numero' => $faker->word,
				'complemento' => $faker->word,
				'bairro' => $faker->word,
				'cidade' => $faker->word,
				'estado' => $faker->word,
			);
			Inscricao::create($inscricao);
		}
	}

}
