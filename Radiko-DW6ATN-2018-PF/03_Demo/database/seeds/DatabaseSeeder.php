<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(TipoHuertaSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(UnidadesDeMedidaSeeder::class);
        $this->call(ProductosSeeder::class);
        $this->call(HuertasSeeder::class);
        $this->call(ReviewsSeeder::class);
        $this->call(DisponibilidadesSeeder::class);
    }
}
