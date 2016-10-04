<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ReservasSeeder::class);
        $this->call(AcessoriosSeeder::class);
        $this->call(MilitaresSeeder::class);
        $this->call(MunicoesSeeder::class);
        $this->call(ArmamentosSeeder::class);
    }
}
