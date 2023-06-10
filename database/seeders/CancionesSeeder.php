<?php

namespace Database\Seeders;

use App\Models\Cancion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CancionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=CancionesSeeder
        $canciones = [
            [
                'titulo' => 'needLe',
                'audio' => 'audio/cancion_1.ogg',
            ],
            [
                'titulo' => 'Idol Shin\'eitai (Newly Edgy Idols)',
                'audio' => 'audio/cancion_2.ogg',
            ],
            [
                'titulo' => 'Ready Steady',
                'audio' => 'audio/cancion_3.ogg',
            ],
            [
                'titulo' => 'Sekai wa Mada Hajimatte sura Inai (The World Hasn\'t Even Started Yet)',
                'audio' => 'audio/cancion_4.ogg',
            ],
            [
                'titulo' => 'Kuyamu to Kaite Mirai (Composing the Future)',
                'audio' => 'audio/cancion_5.ogg',
            ],
        ];

        foreach ($canciones as $cancion) {
            Cancion::updateOrCreate(['audio' => $cancion['audio']], $cancion);
        }
    }
}
