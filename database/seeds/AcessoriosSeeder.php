<?php

use Illuminate\Database\Seeder;

class AcessoriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $acessorios = ['Lanterna', 'Bandoleira', 'Mascara de gás', 'Coldre', 'Colete'];

        foreach ($acessorios as $acessorio){
            \App\Models\Acessorio::create([
                'descricao' => $acessorio
            ]);
        }
    }
}
