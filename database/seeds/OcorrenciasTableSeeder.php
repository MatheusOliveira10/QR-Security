<?php

use Illuminate\Database\Seeder;
use App\Ocorrencia;

class OcorrenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("public/js/ocorrencias.json");
        $data = json_decode($json);
        foreach ($data as $item)
        {
            Ocorrencia::create(array(
                'id' => $item->id,
                'nome' => $item->nome
            ));
        }    
        
    }
}
