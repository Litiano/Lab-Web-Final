<?php

use Illuminate\Database\Seeder;

class MilitaresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postos = ['General', 'Coronel', 'Tenente-Coronel', 'Major', 'Capitão', '1º Tenente', '2º Tenente',
            'Aspirante a Oficial', 'Subtenente', '1º Sargento', '2º Sargento', '3º Sargento', 'Cabo', 'Soldado'];


        for($i=0; $i<50; $i++){
            $posto = $postos[array_rand($postos)];
            \App\Models\Militar::create([
                'nome_guerra' => $posto . ' ' . str_random(10),
                'posto' => $posto,
                'reserva_id' => random_int(1, 3)
            ]);
        }
    }
}
