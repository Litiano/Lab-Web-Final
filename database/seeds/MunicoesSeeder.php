<?php

use Illuminate\Database\Seeder;

class MunicoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
           \App\Models\Municao::create([
               'calibre' => rand(7, 12),
               'descricao' => str_random(10)
           ]);
        }
    }
}
