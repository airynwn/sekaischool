<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=TriviaSeeder
        DB::table('trivia')->insert([
            // ********** LEO/NEED **********
            // ? ********** ICHIKA **********
            [
                'dato' => 'Sus padres entablaron una relación de casualidad por gustarles la misma canción.',
                'pj_id' => 1,
            ],
            [
                'dato' => 'Su guitarra eléctrica está inspirada en la Fender American Original 60s Telecaster.',
                'pj_id' => 1,
            ],
            [
                'dato' => 'Es embajadora de Pocari Sweat, una marca de bebidas deportivas.',
                'pj_id' => 1,
            ],
            // ? ********** SAKI **********
            [
                'dato' => 'Su madre es profesora de piano.',
                'pj_id' => 2,
            ],
            [
                'dato' => 'Su sintetizador está inspirado en el Korg KROSS 2-61.',
                'pj_id' => 2,
            ],
            [
                'dato' => 'Saki aprendió a hacer malabares mientras estaba en el hospital.',
                'pj_id' => 2,
            ],
            // ? ********** HONAMI **********
            [
                'dato' => 'Cuando era pequeña, era voluntaria en una residencia.',
                'pj_id' => 3,
            ],
            [
                'dato' => 'Su batería está inspirada en la Yamaha Stage Custom.',
                'pj_id' => 3,
            ],
            [
                'dato' => 'Puede distinguir las tartas de manzana de sus amigos sólo por cómo se ven.',
                'pj_id' => 3,
            ],
            // ? ********** SHIHO **********
            [
                'dato' => 'Juega a juegos de criar mascostas en el móvil, aunque le da vergüenza, ya que siente que las cosas monas no van con su imagen.',
                'pj_id' => 4,
            ],
            [
                'dato' => 'Su bajo está inspirado en el Fender American Elite Jazz Bass.',
                'pj_id' => 4,
            ],
            [
                'dato' => 'Es una gran fan de Phenny, la mascota de Phoenix Wonderland, y colecciona merchandising.',
                'pj_id' => 4,
            ],
            // ********** MORE MORE JUMP! **********
            // ? ********** MINORI **********
            [
                'dato' => 'Tiene un hermano pequeño que está en la primaria.',
                'pj_id' => 5,
            ],
            [
                'dato' => 'Sabe mucho sobre la cultura idol en general.',
                'pj_id' => 5,
            ],
            [
                'dato' => 'Tiene un diario y se asegura de escribir todos los días.',
                'pj_id' => 5,
            ],
            // ? ********** HARUKA **********
            [
                'dato' => 'Cuando sale a la calle, suele llevar gafas para disimular.',
                'pj_id' => 6,
            ],
            [
                'dato' => 'Su comida favorita son los dulces, pero su disciplina en la dieta le impide comerlos.',
                'pj_id' => 6,
            ],
            [
                'dato' => 'Hasta hace poco estaba en el club de baloncesto, pero estaba muy ocupada siendo idol como para participar en partidos oficiales.',
                'pj_id' => 6,
            ],
            // ? ********** AIRI **********
            [
                'dato' => 'Se unió al Club de Ceremonia del Té en parte por su amor por los dulces japoneses.',
                'pj_id' => 7,
            ],
            [
                'dato' => 'Le encantan los gatos, pero es alérgica a ellos.',
                'pj_id' => 7,
            ],
            [
                'dato' => 'Es la hija mediana: tiene una hermana mayor y una hermana pequeña.',
                'pj_id' => 7,
            ],
            // ? ********** SHIZUKU **********
            [
                'dato' => 'Su madre da clases de koto y su padre tocaba la guitarra para una banda famosa.',
                'pj_id' => 8,
            ],
            [
                'dato' => 'Le gusta bordar y compra pañuelos lisos para coserles sus propios diseños.',
                'pj_id' => 8,
            ],
            [
                'dato' => 'Se le da fatal la tecnología hasta el punto de que podría romperla.',
                'pj_id' => 8,
            ],
            // ********** VIVID BAD SQUAD **********
            // ? ********** KOHANE **********
            [
                'dato' => 'Le gusta tomar bebidas con mucha leche, como el café con leche.',
                'pj_id' => 9,
            ],
            [
                'dato' => 'Ella y su padre adoptaron una serpiente a la que considera familia y por la que siente un vínculo fraternal.',
                'pj_id' => 9,
            ],
            [
                'dato' => 'Kohane suele ser comparada con un hámster.',
                'pj_id' => 9,
            ],
            // ? ********** AN **********
            [
                'dato' => 'Se le dan fatal las matemáticas y estudiar en general.',
                'pj_id' => 10,
            ],
            [
                'dato' => 'Es extrovertida y disfruta trabajar en el WEEKEND GARAGE porque le gusta hablar con los clientes.',
                'pj_id' => 10,
            ],
            [
                'dato' => 'Es suplente para el equipo de baloncesto y tiene envidia de la gente alta, ya que la altura les da una ventaja en el baloncesto.',
                'pj_id' => 10,
            ],
            // ? ********** AKITO **********
            [
                'dato' => 'Le dan miedo los perros de cualquier tamaño. Esto empezó después de que le mordiera un perro.',
                'pj_id' => 11,
            ],
            [
                'dato' => 'Él y Haruka son los que más temprano se levantan.',
                'pj_id' => 11,
            ],
            [
                'dato' => 'Su pelo es naranja natural y se tiñe el mechón amarillo.',
                'pj_id' => 11,
            ],
            // ? ********** TOYA **********
            [
                'dato' => 'Le gusta jugar en salones recreativos y es muy bueno en las máquinas caza peluches.',
                'pj_id' => 12,
            ],
            [
                'dato' => 'Le gusta el algodón de azúcar y se le da bien darle distintas formas.',
                'pj_id' => 12,
            ],
            [
                'dato' => 'Le gusta leer y, especialmente, le interesan las novelas de misterio.',
                'pj_id' => 12,
            ],
            // ********** WONDERLANDS X SHOWTIME **********
            // ? ********** TSUKASA **********
            [
                'dato' => 'La obra que representó en el Festival Escolar de Kamiyama se titulaba "Romeo y Julieta: Battle Royale".',
                'pj_id' => 13,
            ],
            [
                'dato' => 'Se le da bien dibujar.',
                'pj_id' => 13,
            ],
            [
                'dato' => 'Según NeneRobo, la voz de Tsukasa puede alcanzar el volumen de un tren en un paso a nivel.',
                'pj_id' => 13,
            ],
            // ? ********** EMU **********
            [
                'dato' => 'Suele decir onomatopeyas japonesas en medio de sus explicaciones, lo cual confunde a Tsukasa y Nene.',
                'pj_id' => 14,
            ],
            [
                'dato' => 'Fue a la que se le ocurrió el nombre de su grupo, además de su eslógan "Wonderhoy!".',
                'pj_id' => 14,
            ],
            [
                'dato' => 'Una vez quedó entre los tres primeros en los exámenes de su escuela, pero nadie le creyó, ya que era el día de los inocentes.',
                'pj_id' => 14,
            ],
            // ? ********** NENE **********
            [
                'dato' => 'No le gustan los caramelos de menta porque piensa que saben a pasta de dientes.',
                'pj_id' => 15,
            ],
            [
                'dato' => 'Es buena dando recomendaciones de películas, pues le gusta investigar y hablar sobre ello.',
                'pj_id' => 15,
            ],
            [
                'dato' => 'Le gusta comer taiyaki empezando por la cola.',
                'pj_id' => 15,
            ],
            // ? ********** RUI **********
            [
                'dato' => 'Su padre es ingeniero en robótica y su madre es bióloga.',
                'pj_id' => 16,
            ],
            [
                'dato' => 'En su habitación tiene un robot parecido a Emu y otro parecido a Tsukasa.',
                'pj_id' => 16,
            ],
            [
                'dato' => 'Le fascinan los ornitorrincos por ser mamíferos que ponen huevos.',
                'pj_id' => 16,
            ],
            // ********** NIGHTCORD AT 25:00 **********
            // ? ********** KANADE **********
            [
                'dato' => 'Su dieta consiste en fideos instantáneos, comida enlatada, barritas nutritivas y suplementos vitamínicos.',
                'pj_id' => 17,
            ],
            [
                'dato' => 'Mira gameplays en lugar de jugar por ella misma, ya que si juega, la música la absorbe tanto que muere enseguida.',
                'pj_id' => 17,
            ],
            [
                'dato' => 'Tiene el pelo tan largo porque considera una molestia tener que cortarlo, y la han intentado contratar como modelo por ello.',
                'pj_id' => 17,
            ],
            // ? ********** MAFUYU **********
            [
                'dato' => 'Tiene un acuario vacío.',
                'pj_id' => 18,
            ],
            [
                'dato' => 'Debido a su falta del sentido del gusto, tolera muy bien el picante.',
                'pj_id' => 18,
            ],
            [
                'dato' => 'Duerme 5 horas de media.',
                'pj_id' => 18,
            ],
            // ? ********** ENA **********
            [
                'dato' => 'Ena era fan de la música de Kanade desde antes de conocerla, haciendo ilustraciones y covers de sus canciones.',
                'pj_id' => 19,
            ],
            [
                'dato' => 'Es la que más tarde se levanta.',
                'pj_id' => 19,
            ],
            [
                'dato' => 'Tiene más de 70.000 imágenes en su galería.',
                'pj_id' => 19,
            ],
            // ? ********** MIZUKI **********
            [
                'dato' => 'Mizuki usa pronombres neutros o femeninos, aunque preferiblemente se usa simplemente su nombre.',
                'pj_id' => 20,
            ],
            [
                'dato' => 'Confeccionó los trajes de Rui y Nene tras encontrarse con Rui trabajando en NeneRobo, lo que le pareció feo.',
                'pj_id' => 20,
            ],
            [
                'dato' => 'Su nombre online, Amia, viene de su personaje favorito de un anime de chicas mágicas.',
                'pj_id' => 20,
            ],

        ]);
    }
}
