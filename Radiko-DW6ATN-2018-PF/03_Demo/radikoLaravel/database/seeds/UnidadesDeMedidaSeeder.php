<?php

use Illuminate\Database\Seeder;

use App\Models\UnidadDeMedida;

class UnidadesDeMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//#1
		UnidadDeMedida::create([
			'unidad' => 'kg'
		]);
		//#2
		UnidadDeMedida::create([
			'unidad' => 'g'
		]);
		//#3
		UnidadDeMedida::create([
			'unidad' => 'l'
		]);
		//#4
		UnidadDeMedida::create([
			'unidad' => 'ml'
		]);
		//#5
		UnidadDeMedida::create([
			'unidad' => 'u'
		]);
		//#6
		UnidadDeMedida::create([
			'unidad' => 'cc'
		]);
    }
}
