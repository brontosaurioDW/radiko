<?php

use Illuminate\Database\Seeder;
use App\Models\Huerta;

class HuertasSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
	//#1
  	Huerta::create([
		'huerta' => 'Jardín Orgánico',
  		'cuit' => 30354568459,
  		'razon_social' => 'Huerta S.A.',
  		'direccion' => 'Sáenz Peña 419, B1823 Remedios de Escalada, Buenos Aires',
		'cantidad_max_envios' => 15,
		'foto' => 'h-1.jpg',
		'destacado' => true,
		'tipo_huerta_id' => 1,
		'producto_id' => 1,
		'usuario_id' => 9
    ]);
	//#2
    Huerta::create([
		'huerta' => 'Orgánica Urbana',
		'cuit' => 33214569528,
		'razon_social' => 'Gonzales y Perez S.R.L',
		'direccion'=> 'Av. Estado de Israel 4799',
		'cantidad_max_envios' => 20,
		'foto' => 'h-2.jpg',
		'destacado' => false,
		'tipo_huerta_id' => 1,
		'producto_id' => 1,
		'usuario_id' => 10
    ]);
	//#3
    Huerta::create([
		'huerta' => 'Tallo Verde',
		'cuit' => 34245632145,
		'razon_social' => 'Tallo S.A.',
		'direccion'=> 'Ruta 192 Km. 8 - Open Door - Luján',
		'cantidad_max_envios' => 10,
		'foto' => 'h-3.jpg',
		'destacado' => true,
		'tipo_huerta_id' => 2,
		'producto_id' => 1,
		'usuario_id' => 11
    ]);
	//#4
    Huerta::create([
		'huerta' => 'Estilo Orgánico',
		'cuit' => 30457896529,
		'razon_social' => 'Gatofer y Asociados',
		'direccion'=> 'Sta Magdalena 1998-1900, B1839BWB 9 de Abril, Buenos Aires',
		'cantidad_max_envios' => 25,
		'foto' => 'h-5.jpg',
		'destacado' => false,
		'tipo_huerta_id' => 2,
		'producto_id' => 1,
		'usuario_id' => 12
    ]);
	//#5
    Huerta::create([
		'huerta' => 'El Jardín',
		'cuit' => 30457237829,
		'razon_social' => 'El Jardín',
		'direccion'=> '3 de Febrero 940, San Isidro, Buenos Aires',
		'cantidad_max_envios' => 25,
		'foto' => 'h-6.jpg',
		'destacado' => true,
		'tipo_huerta_id' => 1,
		'producto_id' => 1,
		'usuario_id' => 13
    ]);
	//#6
    Huerta::create([
		'huerta' => 'La Huerta de Pedro',
		'cuit' => 30478236529,
		'razon_social' => 'Pedro and Company',
		'direccion'=> 'Don Bosco 8798-8600, B1740DTP Cuartel V, Buenos Aires',
		'cantidad_max_envios' => 25,
		'foto' => 'h-7.jpg',
		'destacado' => true,
		'tipo_huerta_id' => 1,
		'producto_id' => 1,
		'usuario_id' => 14
    ]);
	//#7
    Huerta::create([
		'huerta' => 'El Brote Urbano',
		'cuit' => 30457893229,
		'razon_social' => 'Brote y Asociados',
		'direccion'=> 'Av. Córdoba 4706, C1414BAS CABA',
		'cantidad_max_envios' => 25,
		'foto' => 'h-4.jpg',
		'destacado' => true,
		'tipo_huerta_id' => 2,
		'producto_id' => 1,
		'usuario_id' => 15
    ]);
  }
}