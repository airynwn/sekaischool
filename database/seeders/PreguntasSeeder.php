<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=PreguntasSeeder
        DB::table('preguntas')->insert([
            ['pregunta' => 'Género'],
            ['pregunta' => 'Cumpleaños'],
            ['pregunta' => 'Altura'],
            ['pregunta' => 'Instituto'],
            ['pregunta' => 'Hobbies'],
            ['pregunta' => 'Especialidad'],
            ['pregunta' => 'Comida favorita'],
            ['pregunta' => 'Comida menos favorita'],
            ['pregunta' => 'No le gusta'],
            ['pregunta' => 'Comité'],
            ['pregunta' => 'Trabajo'],
        ]);
    }
}
