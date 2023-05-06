<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GruposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=GruposSeeder
        DB::table('grupos')->insert([
            [
                'nombre' => 'Leo/need',
                'logo' => 'img/grupos/logo-ln.png',
                'imagen' => 'img/grupos/img-ln.png',
                'historia' => 'historia de leo/need'
            ],
            [
                'nombre' => 'MORE MORE JUMP!',
                'logo' => 'img/grupos/logo-mmj.png',
                'imagen' => 'img/grupos/img-mmj.png',
                'historia' => 'historia de more more jump!'
            ],
            [
                'nombre' => 'Vivid BAD SQUAD',
                'logo' => 'img/grupos/logo-vbs.png',
                'imagen' => 'img/grupos/img-vbs.png',
                'historia' => 'historia de vbs'
            ],
            [
                'nombre' => 'Wonderlands x Showtime',
                'logo' => 'img/grupos/logo-wxs.png',
                'imagen' => 'img/grupos/img-wxs.png',
                'historia' => 'historia de wxs'
            ],
            [
                'nombre' => 'Nightcord at 25:00',
                'logo' => 'img/grupos/logo-n25.png',
                'imagen' => 'img/grupos/img-n25.png',
                'historia' => 'historia de n25'
            ],
        ]);
    }
}
