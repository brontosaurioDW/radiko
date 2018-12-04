<?php

use Illuminate\Database\Seeder;
use App\Models\Disponibilidad;

class DisponibilidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //huerta #1	
		Disponibilidad::create([
			'dias' 		=> 'lunes',
			'inicio' 	=> '09:00:00',
			'final'		=> '18:00:00',
			'activo'	=> 1,
			'huerta_id' => 1,
		]);
		Disponibilidad::create([
			'dias' 		=> 'martes',
			'inicio' 	=> '09:00:00',
			'final'		=> '18:00:00',
			'activo'	=> 1,
			'huerta_id' => 1,
		]);
		Disponibilidad::create([
			'dias' 		=> 'jueves',
			'inicio' 	=> '08:00:00',
			'final'		=> '17:00:00',
			'activo'	=> 1,
			'huerta_id' => 1,
		]);
		Disponibilidad::create([
			'dias' 		=> 'viernes',
			'inicio' 	=> '10:00:00',
			'final'		=> '19:00:00',
			'activo'	=> 1,
			'huerta_id' => 1,
		]);
		
		//huerta #2	
		Disponibilidad::create([
			'dias' 		=> 'martes',
			'inicio' 	=> '08:00:00',
			'final'		=> '20:00:00',
			'activo'	=> 1,
			'huerta_id' => 2,
		]);
		Disponibilidad::create([
			'dias' 		=> 'jueves',
			'inicio' 	=> '08:00:00',
			'final'		=> '20:00:00',
			'activo'	=> 1,
			'huerta_id' => 2,
		]);
		Disponibilidad::create([
			'dias' 		=> 'sábado',
			'inicio' 	=> '08:00:00',
			'final'		=> '20:00:00',
			'activo'	=> 1,
			'huerta_id' => 2,
		]);
		
		//huerta #3	
		Disponibilidad::create([
			'dias' 		=> 'martes',
			'inicio' 	=> '07:00:00',
			'final'		=> '12:00:00',
			'activo'	=> 1,
			'huerta_id' => 3,
		]);
		Disponibilidad::create([
			'dias' 		=> 'miercoles',
			'inicio' 	=> '08:00:00',
			'final'		=> '18:00:00',
			'activo'	=> 1,
			'huerta_id' => 3,
		]);
		Disponibilidad::create([
			'dias' 		=> 'sábado',
			'inicio' 	=> '08:00:00',
			'final'		=> '18:00:00',
			'activo'	=> 1,
			'huerta_id' => 3,
		]);
		
		//huerta #4	
		Disponibilidad::create([
			'dias' 		=> 'jueves',
			'inicio' 	=> '10:00:00',
			'final'		=> '20:00:00',
			'activo'	=> 1,
			'huerta_id' => 4,
		]);
		Disponibilidad::create([
			'dias' 		=> 'viernes',
			'inicio' 	=> '10:00:00',
			'final'		=> '20:00:00',
			'activo'	=> 1,
			'huerta_id' => 4,
		]);
		Disponibilidad::create([
			'dias' 		=> 'sábado',
			'inicio' 	=> '10:00:00',
			'final'		=> '20:00:00',
			'activo'	=> 1,
			'huerta_id' => 4,
		]);
		Disponibilidad::create([
			'dias' 		=> 'domingo',
			'inicio' 	=> '10:00:00',
			'final'		=> '14:00:00',
			'activo'	=> 1,
			'huerta_id' => 4,
		]);
		
		//huerta #5	
		Disponibilidad::create([
			'dias' 		=> 'lunes',
			'inicio' 	=> '10:00:00',
			'final'		=> '16:00:00',
			'activo'	=> 1,
			'huerta_id' => 5,
		]);
		Disponibilidad::create([
			'dias' 		=> 'martes',
			'inicio' 	=> '10:00:00',
			'final'		=> '18:00:00',
			'activo'	=> 1,
			'huerta_id' => 5,
		]);
		Disponibilidad::create([
			'dias' 		=> 'jueves',
			'inicio' 	=> '10:00:00',
			'final'		=> '18:00:00',
			'activo'	=> 1,
			'huerta_id' => 5,
		]);
		Disponibilidad::create([
			'dias' 		=> 'viernes',
			'inicio' 	=> '10:00:00',
			'final'		=> '20:00:00',
			'activo'	=> 1,
			'huerta_id' => 5,
		]);
		
		//huerta #6	
		Disponibilidad::create([
			'dias' 		=> 'lunes',
			'inicio' 	=> '11:00:00',
			'final'		=> '19:00:00',
			'activo'	=> 1,
			'huerta_id' => 6,
		]);
		Disponibilidad::create([
			'dias' 		=> 'martes',
			'inicio' 	=> '11:00:00',
			'final'		=> '19:00:00',
			'activo'	=> 1,
			'huerta_id' => 6,
		]);
		Disponibilidad::create([
			'dias' 		=> 'miercoles',
			'inicio' 	=> '11:00:00',
			'final'		=> '19:00:00',
			'activo'	=> 1,
			'huerta_id' => 6,
		]);
		Disponibilidad::create([
			'dias' 		=> 'sábado',
			'inicio' 	=> '10:00:00',
			'final'		=> '14:00:00',
			'activo'	=> 1,
			'huerta_id' => 6,
		]);
		
		//huerta #7	
		Disponibilidad::create([
			'dias' 		=> 'martes',
			'inicio' 	=> '08:00:00',
			'final'		=> '19:00:00',
			'activo'	=> 1,
			'huerta_id' => 7,
		]);
		Disponibilidad::create([
			'dias' 		=> 'jueves',
			'inicio' 	=> '08:00:00',
			'final'		=> '19:00:00',
			'activo'	=> 1,
			'huerta_id' => 7,
		]);
		Disponibilidad::create([
			'dias' 		=> 'viernes',
			'inicio' 	=> '08:00:00',
			'final'		=> '19:00:00',
			'activo'	=> 1,
			'huerta_id' => 7,
		]);
		Disponibilidad::create([
			'dias' 		=> 'sábado',
			'inicio' 	=> '10:00:00',
			'final'		=> '14:00:00',
			'activo'	=> 1,
			'huerta_id' => 7,
		]);
    }
}
