<?php 

class PalestrasTableSeeder extends DatabaseSeeder 
{

	public function run()
	{
		$faker = $this->getFaker();

		for($i = 1; $i <= 10; $i++) {
			$palestra = array(
				'nome' => $faker->word,
				'horario' => $faker->word,
				'carga_horaria' => $faker->word,
				'Palestrante' => $faker->word,
				'data' => $faker->word,
				'valor' => $faker->word,
			);
			Palestra::create($palestra);
		}
	}

}
