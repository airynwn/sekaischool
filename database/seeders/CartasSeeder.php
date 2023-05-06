<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=CartasSeeder
        DB::table('cartas')->insert([
            [
                'nombre' => 'Distant-Looking, but Friendly', 'rareza' => 1, 'atributo' => 'cool',
                'unidolized' => 'img/cartas/1_1.png', 'idolized' => 'img/cartas/1_1.png', 'pj_id' => 1
            ],
            [
                'nombre' => 'Leo/need', 'rareza' => 2, 'atributo' => 'happy',
                'unidolized' => 'img/cartas/2_1.png', 'idolized' => 'img/cartas/2_1.png', 'pj_id' => 1
            ],
            [
                'nombre' => 'What Lies Beyond', 'rareza' => 3, 'atributo' => 'mysterious',
                'unidolized' => 'img/cartas/3_1.png', 'idolized' => 'img/cartas/3_2.png', 'pj_id' => 1
            ],
            [
                'nombre' => 'A Chat Before Dawn', 'rareza' => 4, 'atributo' => 'cute',
                'unidolized' => 'img/cartas/4_1.png', 'idolized' => 'img/cartas/4_2.png', 'pj_id' => 1
            ],

        ]);
    }
}
