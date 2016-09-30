<?php

use Illuminate\Database\Seeder;

class ArmamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 20; $i++){
            \App\Models\Armamento::create([
                'reserva_id' => rand(1, 3),
                'numero_serie' => rand(100000, 999999),
                'modelo' => str_random(10),
                'fabricante' => str_random(10),
                'disponivel' => 1
            ]);
        }
    }
}
