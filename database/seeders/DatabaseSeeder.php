<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => 'adminlaura',
                'email' => 'laura@laura.com',
                'cumple' => '2001-09-14',
                'admin' => true,
                'password' => Hash::make('adminadmin1'),
        ]);
        DB::table('users')->insert([
                'name' => 'JuanDiego',
                'email' => 'juandi@juandi.com',
                'cumple' => '2001-10-01',
                'biografia' => 'no soy protagonista de ninguna novela pero siempre estoy abierto al chisme',
                'pj_fav_id' => 2,
                'grupo_fav_id' => 1,
                'twitter' => '@Juandiewe',
                'discord' => 'juandiewe#1111',
                'password' => Hash::make('adminadmin1'),
        ]);
        DB::table('users')->insert([
                'name' => 'Eduardo',
                'email' => 'edu@edu.com',
                'cumple' => '1999-07-21',
                'biografia' => 'Estoy arrecio',
                'pj_fav_id' => 9,
                'grupo_fav_id' => 2,
                'password' => Hash::make('adminadmin1'),
        ]);
        DB::table('users')->insert([
                'name' => 'Villa',
                'email' => 'villa@villa.com',
                'cumple' => '1997-01-23',
                'biografia' => 'Unlucky memes y cosas varias',
                'pj_fav_id' => 18,
                'grupo_fav_id' => 4,
                'twitter' => '@Villaseis',
                'discord' => 'villaseis#1111',
                'password' => Hash::make('adminadmin1'),
        ]);
    }
}
