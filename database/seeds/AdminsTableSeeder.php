<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Binho',
            'email' => 'binho@binho.com',
            'password' => Hash::make('123123'),
        ]);
    }
}
