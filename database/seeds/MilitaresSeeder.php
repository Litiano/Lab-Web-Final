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
        $postos = ['Marechal', 'General de Exército', 'General de Divisão', 'General de Brigada', 'Coronel', 'Tenente-Coronel',
            'Major', 'Capitão', '1º Tenente', '2º Tenente', 'Aspirante a Oficial', 'Subtenente', '1º Sargento', '2º Sargento',
            '3º Sargento', 'Taifeiro-Mor', 'Cabo', 'Taifeiro de 1ª Classe', 'Taifeiro de 2º Classe', 'Soldado'];

        for($i=0; $i<=50; $i++){
            \App\Models\Militar::create([
                'nome_guerra' => str_random(10) . ' ' . str_random(10),
                'posto' => $postos[array_rand($postos)]
            ]);
        }
    }
}
