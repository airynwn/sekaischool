<?php

namespace Database\Seeders;

use App\Models\Respuesta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=RespuestasSeeder
        $respuestas = [
            // ? ****************** LEO/NEED  ****************** //
            // ********* ICHIKA  ********* //
            [
            // ** GÉNERO **
                'respuesta' => 'Femenino',
                'pj_id' => 1,
                'pregunta_id' => 1,
            ],
            // ** CUMPLEAÑOS **
            [
                'respuesta' => '11-08',
                'pj_id' => 1,
                'pregunta_id' => 2,
            ],
            // ** ALTURA **
            [
                'respuesta' => '161cm',
                'pj_id' => 1,
                'pregunta_id' => 3,
            ],
            // ** INSTITUTO **
            [
                'respuesta' => 'Academia de Chicas Miyamasuzaka (1-C)',
                'pj_id' => 1,
                'pregunta_id' => 4,
            ],
            // ** HOBBIES **
            [
                'respuesta' => 'Escuchar canciones de Miku, admirar sus cactus',
                'pj_id' => 1,
                'pregunta_id' => 5,
            ],
            // ** ESPECIALIDAD **
            [
                'respuesta' => 'Pelar manzanas',
                'pj_id' => 1,
                'pregunta_id' => 6,
            ],
            // ** COMIDA FAVORITA **
            [
                'respuesta' => 'Yakisoba pan',
                'pj_id' => 1,
                'pregunta_id' => 7,
            ],
            // ** COMIDA MENOS FAVORITA **
            [
                'respuesta' => 'Guisantes',
                'pj_id' => 1,
                'pregunta_id' => 8,
            ],
            // ** NO LE GUSTA **
            [
                'respuesta' => 'Atracciones de feria',
                'pj_id' => 1,
                'pregunta_id' => 9,
            ],
            // ** COMITÉ **
            [
                'respuesta' => 'Delegada de clase',
                'pj_id' => 1,
                'pregunta_id' => 10,
            ],
            // ** TRABAJO **
            [
                'respuesta' => 'Restaurante de comida rápida',
                'pj_id' => 1,
                'pregunta_id' => 11,
            ],
            // ********* SAKI  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Femenino',
                    'pj_id' => 2,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '09-05',
                    'pj_id' => 2,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '159cm',
                    'pj_id' => 2,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Academia de Chicas Miyamasuzaka (1-C)',
                    'pj_id' => 2,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Vídeos de moda y maquillaje, bordado con cuentas',
                    'pj_id' => 2,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Peluquería, malabares',
                    'pj_id' => 2,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Aperitivos',
                    'pj_id' => 2,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Gachas de arroz',
                    'pj_id' => 2,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Estar sola',
                    'pj_id' => 2,
                    'pregunta_id' => 9,
                ],
                // ** COMITÉ **
                [
                    'respuesta' => 'Comité Ejecutivo del Festival Deportivo',
                    'pj_id' => 2,
                    'pregunta_id' => 10,
                ],
                // ** TRABAJO **
                [
                    'respuesta' => 'Cafetería',
                    'pj_id' => 2,
                    'pregunta_id' => 11,
                ],
            // ********* HONAMI  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Femenino',
                    'pj_id' => 3,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '27-10',
                    'pj_id' => 3,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '166cm',
                    'pj_id' => 3,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Academia de Chicas Miyamasuzaka (1-B)',
                    'pj_id' => 3,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Pasear a su perro, jardinería',
                    'pj_id' => 3,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Faenas domésticas, natación',
                    'pj_id' => 3,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Tarta de manzana',
                    'pj_id' => 3,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Queso',
                    'pj_id' => 3,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Dibujar',
                    'pj_id' => 3,
                    'pregunta_id' => 9,
                ],
                // ** COMITÉ **
                [
                    'respuesta' => 'Comité de Embellecimiento',
                    'pj_id' => 3,
                    'pregunta_id' => 10,
                ],
                // ** TRABAJO **
                [
                    'respuesta' => 'Ama de casa',
                    'pj_id' => 3,
                    'pregunta_id' => 11,
                ],
            // ********* SHIHO  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Femenino',
                    'pj_id' => 4,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '08-01',
                    'pj_id' => 4,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '159cm',
                    'pj_id' => 4,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Academia de Chicas Miyamasuzaka (1-A)',
                    'pj_id' => 4,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Ir a conciertos de bandas de chicas, tocar el bajo',
                    'pj_id' => 4,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Caligrafía',
                    'pj_id' => 4,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Ramen, filete ruso',
                    'pj_id' => 4,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Tofu',
                    'pj_id' => 4,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Su hermana',
                    'pj_id' => 4,
                    'pregunta_id' => 9,
                ],
                // ** TRABAJO **
                [
                    'respuesta' => 'Club de música en vivo',
                    'pj_id' => 4,
                    'pregunta_id' => 11,
                ],
            // ? ****************** MORE MORE JUMP!  ****************** //
            // ********* MINORI  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Femenino',
                    'pj_id' => 5,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '14-04',
                    'pj_id' => 5,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '158cm',
                    'pj_id' => 5,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Academia de Chicas Miyamasuzaka (1-A)',
                    'pj_id' => 5,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Coreografía, escribir en su diario, cuidar animales',
                    'pj_id' => 5,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Inventar eslóganes',
                    'pj_id' => 5,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Salmón',
                    'pj_id' => 5,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Brócoli',
                    'pj_id' => 5,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Actividades relajantes',
                    'pj_id' => 5,
                    'pregunta_id' => 9,
                ],
                // ** COMITÉ **
                [
                    'respuesta' => 'Comité de Cuidado de Animales',
                    'pj_id' => 5,
                    'pregunta_id' => 10,
                ],
                // ** TRABAJO **
                [
                    'respuesta' => 'Cafetería',
                    'pj_id' => 5,
                    'pregunta_id' => 11,
                ],
            // ********* HARUKA  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Femenino',
                    'pj_id' => 6,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '05-10',
                    'pj_id' => 6,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '163cm',
                    'pj_id' => 6,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Academia de Chicas Miyamasuzaka (1-C)',
                    'pj_id' => 6,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Coleccionar artículos de pingüinos',
                    'pj_id' => 6,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Baloncesto',
                    'pj_id' => 6,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Dulces',
                    'pj_id' => 6,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Wasabi',
                    'pj_id' => 6,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Ociosidad',
                    'pj_id' => 6,
                    'pregunta_id' => 9,
                ],
                // ** COMITÉ **
                [
                    'respuesta' => 'Comité Ejecutivo del Festival Deportivo',
                    'pj_id' => 6,
                    'pregunta_id' => 10,
                ],
            // ********* AIRI  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Femenino',
                    'pj_id' => 7,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '19-03',
                    'pj_id' => 7,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '156cm',
                    'pj_id' => 7,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Academia de Chicas Miyamasuzaka (2-D)',
                    'pj_id' => 7,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Investigar sobre idols, ir de compras',
                    'pj_id' => 7,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Cocinar, cuidar niños',
                    'pj_id' => 7,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Dulces japoneses',
                    'pj_id' => 7,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Hígado',
                    'pj_id' => 7,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Gatos (por alergia)',
                    'pj_id' => 7,
                    'pregunta_id' => 9,
                ],
            // ********* SHIZUKU  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Femenino',
                    'pj_id' => 8,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '06-12',
                    'pj_id' => 8,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '168cm',
                    'pj_id' => 8,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Academia de Chicas Miyamasuzaka (2-D)',
                    'pj_id' => 8,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Pasear, leer',
                    'pj_id' => 8,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Tiro con arco, bordado',
                    'pj_id' => 8,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Udon, yuba',
                    'pj_id' => 8,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Comida picante',
                    'pj_id' => 8,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Usar ordenadores, guiarse por mapas',
                    'pj_id' => 8,
                    'pregunta_id' => 9,
                ],
                // ** COMITÉ **
                [
                    'respuesta' => 'Comité de Embellecimiento',
                    'pj_id' => 8,
                    'pregunta_id' => 10,
                ],
            // ? ****************** VIVID BAD SQUAD  ****************** //
            // ********* KOHANE  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Femenino',
                    'pj_id' => 9,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '02-03',
                    'pj_id' => 9,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '156cm',
                    'pj_id' => 9,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Academia de Chicas Miyamasuzaka (1-A)',
                    'pj_id' => 9,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Cuidar a la serpiente mascota de su padre',
                    'pj_id' => 9,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Fotografía',
                    'pj_id' => 9,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Shoutao, jin deui',
                    'pj_id' => 9,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Comida en escabeche',
                    'pj_id' => 9,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Hablar en público',
                    'pj_id' => 9,
                    'pregunta_id' => 9,
                ],
                // ** COMITÉ **
                [
                    'respuesta' => 'Comité de Cuidado de Animales',
                    'pj_id' => 9,
                    'pregunta_id' => 10,
                ],
            // ********* AN  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Femenino',
                    'pj_id' => 10,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '26-07',
                    'pj_id' => 10,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '160cm',
                    'pj_id' => 10,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Kamiyama (1-A)',
                    'pj_id' => 10,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Cultivo de menta',
                    'pj_id' => 10,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Preparar café y té',
                    'pj_id' => 10,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Helado de ron con pasas',
                    'pj_id' => 10,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Tomate',
                    'pj_id' => 10,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Fantasmas, historias de miedo',
                    'pj_id' => 10,
                    'pregunta_id' => 9,
                ],
                // ** COMITÉ **
                [
                    'respuesta' => 'Comite Disciplinario',
                    'pj_id' => 10,
                    'pregunta_id' => 10,
                ],
                // ** TRABAJO **
                [
                    'respuesta' => 'Ayudante en la cafetería de su padre',
                    'pj_id' => 10,
                    'pregunta_id' => 11,
                ],
            // ********* AKITO  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Masculino',
                    'pj_id' => 11,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '12-11',
                    'pj_id' => 11,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '174cm',
                    'pj_id' => 11,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Kamiyama (1-C)',
                    'pj_id' => 11,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Estilismo de moda',
                    'pj_id' => 11,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Beatboxing',
                    'pj_id' => 11,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Tortitas, tarta de queso',
                    'pj_id' => 11,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Zanahoria',
                    'pj_id' => 11,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Perros',
                    'pj_id' => 11,
                    'pregunta_id' => 9,
                ],
                // ** TRABAJO **
                [
                    'respuesta' => 'Dependiente de boutique',
                    'pj_id' => 11,
                    'pregunta_id' => 11,
                ],
            // ********* TOYA  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Masculino',
                    'pj_id' => 12,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '25-05',
                    'pj_id' => 12,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '178cm',
                    'pj_id' => 12,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Kamiyama (1-B)',
                    'pj_id' => 12,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Leer',
                    'pj_id' => 12,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Piano, violín',
                    'pj_id' => 12,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Café, galletas',
                    'pj_id' => 12,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Calamares',
                    'pj_id' => 12,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Alturas',
                    'pj_id' => 12,
                    'pregunta_id' => 9,
                ],
                // ** COMITÉ **
                [
                    'respuesta' => 'Comité de Biblioteca',
                    'pj_id' => 12,
                    'pregunta_id' => 10,
                ],
            // ? ****************** WONDERLANDS X SHOWTIME  ****************** //
            // ********* TSUKASA  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Masculino',
                    'pj_id' => 13,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '17-05',
                    'pj_id' => 13,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '172cm',
                    'pj_id' => 13,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Kamiyama (2-A)',
                    'pj_id' => 13,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Musicales, confección de disfraces',
                    'pj_id' => 13,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Tocar el piano, hacer poses guays',
                    'pj_id' => 13,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Acqua pazza, cerdo al jengibre',
                    'pj_id' => 13,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Pimientos',
                    'pj_id' => 13,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Bichos (especialmente ciempiés y milpiés)',
                    'pj_id' => 13,
                    'pregunta_id' => 9,
                ],
                // ** COMITÉ **
                [
                    'respuesta' => 'Delegado de clase',
                    'pj_id' => 13,
                    'pregunta_id' => 10,
                ],
                // ** TRABAJO **
                [
                    'respuesta' => 'Parte del elenco de Phoenix Wonderland',
                    'pj_id' => 13,
                    'pregunta_id' => 11,
                ],
            // ********* EMU  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Femenino',
                    'pj_id' => 14,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '09-09',
                    'pj_id' => 14,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '152cm',
                    'pj_id' => 14,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Academia de Chicas Miyamasuzaka (1-B)',
                    'pj_id' => 14,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Explorar el barrio',
                    'pj_id' => 14,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Acrobacia, sibarita',
                    'pj_id' => 14,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Taiyaki',
                    'pj_id' => 14,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => '¡Ninguna!',
                    'pj_id' => 14,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Oscuridad',
                    'pj_id' => 14,
                    'pregunta_id' => 9,
                ],
                // ** COMITÉ **
                [
                    'respuesta' => 'Comité Ejecutivo del Festival Deportivo',
                    'pj_id' => 14,
                    'pregunta_id' => 10,
                ],
                // ** TRABAJO **
                [
                    'respuesta' => 'Parte del elenco de Phoenix Wonderland',
                    'pj_id' => 14,
                    'pregunta_id' => 11,
                ],
            // ********* NENE  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Femenino',
                    'pj_id' => 15,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '20-07',
                    'pj_id' => 15,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '156cm',
                    'pj_id' => 15,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Kamiyama (1-B)',
                    'pj_id' => 15,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Juegos de lucha, musicales, películas',
                    'pj_id' => 15,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Cantar, tecnología',
                    'pj_id' => 15,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Pomelo',
                    'pj_id' => 15,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Comida con sabor a menta',
                    'pj_id' => 15,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Lugares llenos de gente',
                    'pj_id' => 15,
                    'pregunta_id' => 9,
                ],
                // ** TRABAJO **
                [
                    'respuesta' => 'Parte del elenco de Phoenix Wonderland',
                    'pj_id' => 15,
                    'pregunta_id' => 11,
                ],
            // ********* RUI  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Masculino',
                    'pj_id' => 16,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '24-06',
                    'pj_id' => 16,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '180cm',
                    'pj_id' => 16,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Kamiyama (2-B)',
                    'pj_id' => 16,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Planificación de espectáculos, globoflexia',
                    'pj_id' => 16,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Hacer inventos',
                    'pj_id' => 16,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Refresco de caramelo',
                    'pj_id' => 16,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Verduras',
                    'pj_id' => 16,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Limpiar, tareas domésticas',
                    'pj_id' => 16,
                    'pregunta_id' => 9,
                ],
                // ** COMITÉ **
                [
                    'respuesta' => 'Comité de Ecologización',
                    'pj_id' => 16,
                    'pregunta_id' => 10,
                ],
                // ** TRABAJO **
                [
                    'respuesta' => 'Parte del elenco de Phoenix Wonderland, espectáculos callejeros',
                    'pj_id' => 16,
                    'pregunta_id' => 11,
                ],
            // ? ****************** NIGHTCORD AT 25:00  ****************** //
            // ********* KANADE  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Femenino',
                    'pj_id' => 17,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '10-02',
                    'pj_id' => 17,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '154cm',
                    'pj_id' => 17,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Online',
                    'pj_id' => 17,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Encontrar música nueva para escuchar, anime, manga, arte, películas',
                    'pj_id' => 17,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Medir el tiempo con exactitud',
                    'pj_id' => 17,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Fideos instantáneos, comida enlatada',
                    'pj_id' => 17,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Cilantro, natto y otras comidas malolientes',
                    'pj_id' => 17,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Tareas del hogar, la luz del sol',
                    'pj_id' => 17,
                    'pregunta_id' => 9,
                ],
            // ********* MAFUYU  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Femenino',
                    'pj_id' => 18,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '27-01',
                    'pj_id' => 18,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '162cm',
                    'pj_id' => 18,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Academia de Chicas Miyamasuzaka (2-B)',
                    'pj_id' => 18,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Acuario',
                    'pj_id' => 18,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Hablar inglés',
                    'pj_id' => 18,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'La comida casera de su madre',
                    'pj_id' => 18,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'No lo sabe',
                    'pj_id' => 18,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'No lo sabe',
                    'pj_id' => 18,
                    'pregunta_id' => 9,
                ],
                // ** COMITÉ **
                [
                    'respuesta' => 'Delegada de clase',
                    'pj_id' => 18,
                    'pregunta_id' => 10,
                ],
            // ********* ENA  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Femenino',
                    'pj_id' => 19,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '30-04',
                    'pj_id' => 19,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '158cm',
                    'pj_id' => 19,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Kamiyama (2-D) (Escuela nocturna)',
                    'pj_id' => 19,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Dibujar, tomarse selfies, redes sociales, egosurfing',
                    'pj_id' => 19,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Investigar accesorios de moda, elegir los mejores ingredientes de cocina',
                    'pj_id' => 19,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Tortitas, tarta de queso',
                    'pj_id' => 19,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Zanahoria',
                    'pj_id' => 19,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Levantarse por la mañana',
                    'pj_id' => 19,
                    'pregunta_id' => 9,
                ],
            // ********* MIZUKI  ********* //
            [
                // ** GÉNERO **
                    'respuesta' => 'Desconocido',
                    'pj_id' => 20,
                    'pregunta_id' => 1,
                ],
                // ** CUMPLEAÑOS **
                [
                    'respuesta' => '27-08',
                    'pj_id' => 20,
                    'pregunta_id' => 2,
                ],
                // ** ALTURA **
                [
                    'respuesta' => '163cm',
                    'pj_id' => 20,
                    'pregunta_id' => 3,
                ],
                // ** INSTITUTO **
                [
                    'respuesta' => 'Kamiyama (1-A)',
                    'pj_id' => 20,
                    'pregunta_id' => 4,
                ],
                // ** HOBBIES **
                [
                    'respuesta' => 'Creación de vídeos, collages',
                    'pj_id' => 20,
                    'pregunta_id' => 5,
                ],
                // ** ESPECIALIDAD **
                [
                    'respuesta' => 'Rediseñar ropa',
                    'pj_id' => 20,
                    'pregunta_id' => 6,
                ],
                // ** COMIDA FAVORITA **
                [
                    'respuesta' => 'Arroz al curry, patatas fritas',
                    'pj_id' => 20,
                    'pregunta_id' => 7,
                ],
                // ** COMIDA MENOS FAVORITA **
                [
                    'respuesta' => 'Setas',
                    'pj_id' => 20,
                    'pregunta_id' => 8,
                ],
                // ** NO LE GUSTA **
                [
                    'respuesta' => 'Comida muy caliente',
                    'pj_id' => 20,
                    'pregunta_id' => 9,
                ],
                // ** TRABAJO **
                [
                    'respuesta' => 'Tienda de ropa',
                    'pj_id' => 20,
                    'pregunta_id' => 11,
                ],
        ];

        foreach ($respuestas as $respuesta) {
            Respuesta::updateOrCreate(
                [
                'pj_id' => $respuesta['pj_id'],
                'pregunta_id' => $respuesta['pregunta_id']
                ],
                $respuesta
            );
        }
    }
}
