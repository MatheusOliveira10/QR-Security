<?php

use Illuminate\Database\Seeder;
use App\Sala;

class SalaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("public/js/salas.json");
        $data = json_decode($json);
        foreach ($data as $item)
        {
            Sala::create(array(
                'id' => $item->id,
                'nome' => $item->nome
            ));
        }    
    }
}
