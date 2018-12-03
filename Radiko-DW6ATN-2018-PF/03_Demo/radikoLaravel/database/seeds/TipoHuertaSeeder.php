<?php

use Illuminate\Database\Seeder;
use App\Models\TipoHuerta;

class TipoHuertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//#1	
    	TipoHuerta::create([
    		'tipo' => 'básica'
    	]);
		//#2
    	TipoHuerta::create([
    		'tipo' => 'premium'
    	]);
    }
}
