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
        $this->call(SalaTableSeeder::class);
        $this->call(OcorrenciasTableSeeder::class);
        
        DB::table('users')->insert([
            'name' => 'Pai',
            'email' => 'pai@pai.com',
            'password' => Hash::make('123123'),
        ]);

        DB::table('admins')->insert([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123123'),
        ]);

    }
}
