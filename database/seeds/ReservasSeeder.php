<?php

use Illuminate\Database\Seeder;

class ReservasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservas = [
            [
                'sigla' => 'RES 1ª Cia Inf',
                'descricao' => 'Reserva de Armamento da 1ª Companhia de Infantaria'
            ],
            [
                'sigla' => 'RES 2ª Cia Inf',
                'descricao' => 'Reserva de Armamento da 2ª Companhia de Infantaria'
            ],
            [
                'sigla' => 'RES 1ª Cia Bat',
                'descricao' => 'Reserva de Armamento da 1ª Companhia de Batedores'
            ]
        ];

        foreach ($reservas as $reserva){
            \App\Models\Reserva::create($reserva);
        }
    }
}
