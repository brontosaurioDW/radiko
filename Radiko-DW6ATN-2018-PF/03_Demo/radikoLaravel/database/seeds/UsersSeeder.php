<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//#1
    	User::create([
    		'name' => 'Laura',
    		'last_name' => 'Mitono',
    		'email' => 'lau@mail.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '15-3039-8007',
    		'foto' => NULL,
    		'estado' => 'activo'
    	]);
		//#2
        User::create([
            'name' => 'Florencia',
            'last_name' => 'Ederli',
            'email' => 'fespi@mail.com',
            'password' => \Hash::make('123'),
            'telephone' => NULL,
            'foto' => NULL,
            'estado' => 'activo'
        ]);
		//#3
    	User::create([
    		'name' => 'Florencia',
    		'last_name' => 'Sepúlveda',
    		'email' => 'flor@mail.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '2365-4578',
    		'foto' => 'flors.jpg',
    		'estado' => 'activo'
    	]);
		//#4
    	User::create([
    		'name' => 'Emiliano',
    		'last_name' => 'Hotes',
    		'email' => 'emi@mail.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '23544568',
    		'foto' => 'emi.jpg',
    		'estado' => 'activo'
    	]);
		//#5
    	User::create([
    		'name' => 'Ignacio',
    		'last_name' => 'Holus',
    		'email' => 'ignacio@mail.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '15-8475-3654',
    		'foto' => NULL,
    		'estado' => 'activo'
    	]);
		//#6
    	User::create([
    		'name' => 'Horacio',
    		'last_name' => 'Sangusto',
    		'email' => 'horacio@mail.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '15-3039-8007',
    		'foto' => 'horacio.jpg',
    		'estado' => 'suspendido'
    	]);
		//#7
    	User::create([
    		'name' => 'Agustín',
    		'last_name' => 'Salgado',
    		'email' => 'agustin@mail.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '25484569',
    		'foto' => NULL,
    		'estado' => 'suspendido'
    	]);
		//#8
    	User::create([
    		'name' => 'Camila',
    		'last_name' => 'Rojas',
    		'email' => 'camila@mail.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '15-2136-5478',
    		'foto' => NULL,
    		'estado' => 'activo'
    	]);
		//#9
    	User::create([
    		'name' => 'Carlos',
    		'last_name' => 'Gomez',
    		'email' => 'info@jardinorganico.com.ar',
    		'password' => \Hash::make('123'),
    		'telephone' => '11 4568-1223',
    		'foto' => 'carlos.jpg',
    		'estado' => 'activo'
    	]);
		//#10
    	User::create([
    		'name' => 'Pedro',
    		'last_name' => 'Martinez',
    		'email' => 'hola@huertaorganica.com.ar',
    		'password' => \Hash::make('123'),
    		'telephone' => '11-6547-8542',
    		'foto' => 'pedro.png',
    		'estado' => 'suspendido'
    	]);
		//#11
    	User::create([
    		'name' => 'Oscar',
    		'last_name' => 'Lopez',
    		'email' => 'huerta@talloverde.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '0-800-88-8256',
    		'foto' => 'oscar.png',
    		'estado' => 'pendiente de pago'
    	]);
		//#12
    	User::create([
    		'name' => 'Mariano',
    		'last_name' => 'Pedraza',
    		'email' => 'info@estilorganico.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '15-2839-8358',
    		'foto' => 'mariano.jpg',
    		'estado' => 'dado de baja'
    	]);
		//#13
    	User::create([
    		'name' => 'Clara',
    		'last_name' => 'Diaz',
    		'email' => 'info@eljardin.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '15-2025-1564',
    		'foto' => 'clara.jpg',
    		'estado' => 'activo'
    	]);
		//#14
    	User::create([
    		'name' => 'Pedro',
    		'last_name' => 'Mendoza',
    		'email' => 'info@huertadepedro.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '15-8974-6325',
    		'foto' => 'pedro.jpg',
    		'estado' => 'activo'
    	]);
		//#15
    	User::create([
    		'name' => 'Lara',
    		'last_name' => 'Mugas',
    		'email' => 'huerta@broteurbano.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '15-6548-3214',
    		'foto' => 'lara.jpg',
    		'estado' => 'activo'
    	]);
		//#16
    	User::create([
    		'name' => 'Tomás',
    		'last_name' => 'Laucier',
    		'email' => 'huerta@mburucuyá.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '15-8745-9632',
    		'foto' => 'tomas.jpg',
    		'estado' => 'activo'
    	]);
    }
}