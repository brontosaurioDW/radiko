<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriasSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//#1	
		Categoria::create([
			'categoria' => 'Frutas',
			'icono' => 'frutas.png'
		]);
		//#2
		Categoria::create([
			'categoria' => 'Verduras',
			'icono' => 'verduras.png'
		]);
		//#3
		Categoria::create([
			'categoria' => 'Harinas',
			'icono' => 'harinas.png'
		]);
		//#4
		Categoria::create([
			'categoria' => 'Granja',
			'icono' => 'granjas.png'
		]);
		//#5
		Categoria::create([
			'categoria' => 'Lácteos',
			'icono' => 'lacteos.png'
		]);
		//#6
		Categoria::create([
			'categoria' => 'Carnes',
			'icono' => 'carnes.png'
		]);
		//#7
		Categoria::create([
			'categoria' => 'Especias',
			'icono' => 'especias.png'
		]);
		//#8
		Categoria::create([
			'categoria' => 'Semillas',
			'icono' => 'semillas.png'
		]);
		//#9
		Categoria::create([
			'categoria' => 'Envasados',
			'icono' => 'envasados.png'
		]);
	}
}