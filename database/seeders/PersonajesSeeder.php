<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=PersonajesSeeder
        DB::table('personajes')->insert([
            // *********************** Leo/need ***********************
            [
                'nombre' => 'Ichika Hoshino',
                'grupo_id' => 1,
                'historia' => 'Desde pequeña, Ichika adoraba a Miku y sus canciones. Ichika solía cantar canciones de Miku mientras tocaba la guitarra que le dio su padre.
                Ichika, Saki, Honami y Shiho eran amigas desde niñas. El grupo solía contemplar las estrellas y tocar música, pero después de que Saki fuera hospitalizada durante el colegio, las relaciones de Ichika con Honami y Shiho se torcieron. Aun así, Ichika intentó comunicarse con ambas, pero no obtuvo mucha respuesta.
                Después del regreso de Saki a la escuela y tras entrar al School SEKAI, el grupo se reúne poco a poco y forma Leo/need, llamada así por la lluvia de meteoritos que vieron juntas de pequeñas.
                Es compañera de clase de Saki y Haruka.',
                'personalidad' => 'Aunque a primera vista parece estoica, Ichika es una chica tranquila, modesta y amable que siempre piensa en sus amigos. Se le da bien elogiar a los demás. Según Honami, no siempre se comunica muy bien.
                Al principio Ichika se mostraba apática y era incapaz de armarse de valor para reunir a sus amigas de la infancia, preguntándose si todo seguiría igual. Tras descubrir el School SEKAI, Ichika se vuelve más valiente, feliz y apasionada por la música.
                Le encantan las canciones de Miku, siempre las escucha cuando está aburrida y las usa de referencia.',
                'imagen' => 'img/personajes/img-ichika.png',
                'chibi' => 'img/personajes/chibi-ichika.png',
                'icon' => 'img/personajes/icon-ichika.png',
                'stamp' => 'img/personajes/stamp-ichika.png',
                'sticker' => 'img/personajes/sticker-ichika.png',
                'comic' => 'img/personajes/comic-ichika.png',
            ],
            [
                'nombre' => 'Saki Tenma',
                'grupo_id' => 1,
                'historia' => 'Nacida con un cuerpo débil, Saki estuvo hospitalizada durante toda la secundaria. Su hermano mayor, Tsukasa, cuidó de ella durante ese tiempo hasta que está lo suficientemente sana para volver a la escuela. Saki está decidida a disfrutar de su juventud y experimentar todo lo que no pudo hacer en el hospital. Debido a esta presión, a veces trabaja demasiado y cae enferma.
                Saki era amiga de la infancia de Ichika, Honami y Shiho. Sin embargo, perdió el contacto con ellas en secundaria, excepto con Ichika, que la visitaba en el hospital. Al volver al instituto, se sorprende al ver que el grupo se ha distanciado. Con la ayuda de Ichika, Miku y Luka, consiguen reunir el grupo y volver a tocar con ellas.
                Forma parte del Comité Ejecutivo del Festival Deportivo junto con Haruka y Emu. Es compañera de clase de Ichika y Haruka.',
                'personalidad' => 'Saki es una persona alegre y de buen humor que se esfuerza por no dejar nunca de sonreír. Le gusta la moda y es aficionada a los estilos y la subcultura gyaru.
                De pequeña, Saki solía faltar al colegio debido a su condición enfermiza, al punto de ser educada en casa por un tiempo. Durante sus años de aislamiento, Saki solía sentirse sola y triste, a veces sin ser capaz de sonreír a pesar de los esfuerzo de su hermano. Está decidida a vivir al máximo, aunque a veces puede ignorar sus límites y descuidar su salud.
                A Saki y a su hermano les encantan los parques temáticos y sus atracciones. A veces arrastra a sus compañeros al Phoenix Wondeland, para disgusto de ellos.',
                'imagen' => 'img/personajes/img-saki.png',
                'chibi' => 'img/personajes/chibi-saki.png',
                'icon' => 'img/personajes/icon-saki.png',
                'stamp' => 'img/personajes/stamp-saki.png',
                'sticker' => 'img/personajes/sticker-saki.png',
                'comic' => 'img/personajes/comic-saki.png',
            ],
            [
                'nombre' => 'Honami Mochizuki',
                'grupo_id' => 1,
                'historia' => 'Honami, Ichika, Saki y Shiho eran amigas de la infancia. El grupo solía contemplar las estrellas y tocar música juntas, pero debido a la hospitalización de Saki durante la secundaria, las relaciones de Honami con Ichika y Shiho se torcieron.
                A pesar de querer ser amiga de las dos, dejó de hablarles después de que sus compañeros de clase la llamaran desleal y hablaran mal de Ichika y Shiho. Tras el regreso de Saki, el grupo se reúne poco a poco y forma Leo/need.
                Es estudiante de honor y compañera de clase de Emu. Forma parte del Comité de Embellecimiento junto a Shizuku.',
                'personalidad' => 'Honami es inteligente, atlética y amable. Es amable con todo el mundo y siempre tiene en cuenta sus sentimientos. Sin embargo, esto puede llevarla a ser indecisa, y tiene dificultades para expresar sus propios sentimientos, preocupándose de que la gente no la quiera por ello. No quiere que los demás se preocupen por ella y tiende a emocionarse con facilidad.
                A pesar de ello, siempre apoya a sus amigos y piensa en ellos muy a menudo; la moraleja de su personaje es "...cuando intentas estar del lado de todos, acabas por no estar del lado de nadie..." y que hay más de una forma de bondad.
                Cuando estaba en la secundaria, la gente solía confiar en ella, pero debido a la creencia de que sólo intentaba estar del lado de los demás y que tenía dos caras, poco a poco se fue aislando de sus compañeros. Tras unirse a Leo/need, decide cambiar para mejor y expresar sus verdaderos sentimientos.',
                'imagen' => 'img/personajes/img-honami.png',
                'chibi' => 'img/personajes/chibi-honami.png',
                'icon' => 'img/personajes/icon-honami.png',
                'stamp' => 'img/personajes/stamp-honami.png',
                'sticker' => 'img/personajes/sticker-honami.png',
                'comic' => 'img/personajes/comic-honami.png',
            ],
            [
                'nombre' => 'Shiho Hinomori',
                'grupo_id' => 1,
                'historia' => 'Shiho, Ichika, Saki y Honami eran amigas desde pequeñas. El grupo solía contemplar las estrellas y tocar música, pero debido a la hospitalización de Saki durante la secundaria, las relaciones de Shiho con Ichika y Honami se torcieron. Otras personas intentaron entablar amistad con Shiho, pero ella no mostró ningún interés por ellas, lo que le acarreó una mala reputación.
                A causa de los rumores sobre ella, hizo que Ichika y Honami dejaran de hablarle, por miedo a provocar que se hundieran con ella. Después de que Saki volviera a la escuela y accedieran al School SEKAI, el grupo se reunió poco a poco y formaron Leo/need, llamada así por la lluvia de meteoritos que vieron juntas cuando eran niñas.
                Cuando ella mencionó su falta de habilidad, el grupo se vio envuelto en una discusión, lo que provocó su separación y la mala reputación de Shiho.
                Es compañera de clase de Minori y Kohane.',
                'personalidad' => 'Shiho es introvertida y no le gusta relacionarse con los demás. Se refugia en sus aficiones y no le importa lo que los demás piensen de ella. Aunque es poco abierta, no es antipática y suele estar dispuesta a ayudar a los demás. Es directa y habla sin rodeos. Su actitud fría y distante se debe a su miedo a herir y hundir a los que la rodean.
                Debido a su carácter distante, se han extendido rumores sobre ella por toda la escuela, la mayoría de los cuales afirmaban que era una matona, que a menudo tramaba algo. Aunque Shiho se preocupa mucho por sus amigos de la infancia, no tiene reparos en ser dura con ellos cuando lo considera necesario. No suele hacer cumplidos y, cuando los hace, suelen ser breves y francos.
                Se toma muy en serio los ensayos de la banda, y a menudo lidera el grupo porque es la que tiene más experiencia. Shiho aspira dedicarse profesionalmente a la música en el futuro.',
                'imagen' => 'img/personajes/img-shiho.png',
                'chibi' => 'img/personajes/chibi-shiho.png',
                'icon' => 'img/personajes/icon-shiho.png',
                'stamp' => 'img/personajes/stamp-shiho.png',
                'sticker' => 'img/personajes/sticker-shiho.png',
                'comic' => 'img/personajes/comic-shiho.png',
            ],
            // *********************** MORE MORE JUMP! ***********************
            [
                'nombre' => 'Minori Hanasato',
                'grupo_id' => 2,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-minori.png',
                'chibi' => 'img/personajes/chibi-minori.png',
                'icon' => 'img/personajes/icon-minori.png',
                'stamp' => 'img/personajes/stamp-minori.png',
                'sticker' => 'img/personajes/sticker-minori.png',
                'comic' => 'img/personajes/comic-minori.png',
            ],
            [
                'nombre' => 'Haruka Kiritani',
                'grupo_id' => 2,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-haruka.png',
                'chibi' => 'img/personajes/chibi-haruka.png',
                'icon' => 'img/personajes/icon-haruka.png',
                'stamp' => 'img/personajes/stamp-haruka.png',
                'sticker' => 'img/personajes/sticker-haruka.png',
                'comic' => 'img/personajes/comic-haruka.png',
            ],
            [
                'nombre' => 'Airi Momoi',
                'grupo_id' => 2,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-airi.png',
                'chibi' => 'img/personajes/chibi-airi.png',
                'icon' => 'img/personajes/icon-airi.png',
                'stamp' => 'img/personajes/stamp-airi.png',
                'sticker' => 'img/personajes/sticker-airi.png',
                'comic' => 'img/personajes/comic-airi.png',
            ],
            [
                'nombre' => 'Shizuku Hinomori',
                'grupo_id' => 2,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-shizuku.png',
                'chibi' => 'img/personajes/chibi-shizuku.png',
                'icon' => 'img/personajes/icon-shizuku.png',
                'stamp' => 'img/personajes/stamp-shizuku.png',
                'sticker' => 'img/personajes/sticker-shizuku.png',
                'comic' => 'img/personajes/comic-shizuku.png',
            ],
            // *********************** Vivid BAD SQUAD ***********************
            [
                'nombre' => 'Kohane Azusawa',
                'grupo_id' => 3,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-kohane.png',
                'chibi' => 'img/personajes/chibi-kohane.png',
                'icon' => 'img/personajes/icon-kohane.png',
                'stamp' => 'img/personajes/stamp-kohane.png',
                'sticker' => 'img/personajes/sticker-kohane.png',
                'comic' => 'img/personajes/comic-kohane.png',
            ],
            [
                'nombre' => 'An Shiraishi',
                'grupo_id' => 3,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-an.png',
                'chibi' => 'img/personajes/chibi-an.png',
                'icon' => 'img/personajes/icon-an.png',
                'stamp' => 'img/personajes/stamp-an.png',
                'sticker' => 'img/personajes/sticker-an.png',
                'comic' => 'img/personajes/comic-an.png',
            ],
            [
                'nombre' => 'Akito Shinonome',
                'grupo_id' => 3,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-akito.png',
                'chibi' => 'img/personajes/chibi-akito.png',
                'icon' => 'img/personajes/icon-akito.png',
                'stamp' => 'img/personajes/stamp-akito.png',
                'sticker' => 'img/personajes/sticker-akito.png',
                'comic' => 'img/personajes/comic-akito.png',
            ],
            [
                'nombre' => 'Toya Aoyagi',
                'grupo_id' => 3,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-toya.png',
                'chibi' => 'img/personajes/chibi-toya.png',
                'icon' => 'img/personajes/icon-toya.png',
                'stamp' => 'img/personajes/stamp-toya.png',
                'sticker' => 'img/personajes/sticker-toya.png',
                'comic' => 'img/personajes/comic-toya.png',
            ],
            // *********************** Wonderlands x Showtime ***********************
            [
                'nombre' => 'Tsukasa Tenma',
                'grupo_id' => 4,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-tsukasa.png',
                'chibi' => 'img/personajes/chibi-tsukasa.png',
                'icon' => 'img/personajes/icon-tsukasa.png',
                'stamp' => 'img/personajes/stamp-tsukasa.png',
                'sticker' => 'img/personajes/sticker-tsukasa.png',
                'comic' => 'img/personajes/comic-tsukasa.png',
            ],
            [
                'nombre' => 'Emu Otori',
                'grupo_id' => 4,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-emu.png',
                'chibi' => 'img/personajes/chibi-emu.png',
                'icon' => 'img/personajes/icon-emu.png',
                'stamp' => 'img/personajes/stamp-emu.png',
                'sticker' => 'img/personajes/sticker-emu.png',
                'comic' => 'img/personajes/comic-emu.png',
            ],
            [
                'nombre' => 'Nene Kusanagi',
                'grupo_id' => 4,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-nene.png',
                'chibi' => 'img/personajes/chibi-nene.png',
                'icon' => 'img/personajes/icon-nene.png',
                'stamp' => 'img/personajes/stamp-nene.png',
                'sticker' => 'img/personajes/sticker-nene.png',
                'comic' => 'img/personajes/comic-nene.png',
            ],
            [
                'nombre' => 'Rui Kamishiro',
                'grupo_id' => 4,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-rui.png',
                'chibi' => 'img/personajes/chibi-rui.png',
                'icon' => 'img/personajes/icon-rui.png',
                'stamp' => 'img/personajes/stamp-rui.png',
                'sticker' => 'img/personajes/sticker-rui.png',
                'comic' => 'img/personajes/comic-rui.png',
            ],
            // *********************** Nightcord at 25:00 ***********************
            [
                'nombre' => 'Kanade Yoisaki',
                'grupo_id' => 5,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-kanade.png',
                'chibi' => 'img/personajes/chibi-kanade.png',
                'icon' => 'img/personajes/icon-kanade.png',
                'stamp' => 'img/personajes/stamp-kanade.png',
                'sticker' => 'img/personajes/sticker-kanade.png',
                'comic' => 'img/personajes/comic-kanade.png',
            ],
            [
                'nombre' => 'Mafuyu Asahina',
                'grupo_id' => 5,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-mafuyu.png',
                'chibi' => 'img/personajes/chibi-mafuyu.png',
                'icon' => 'img/personajes/icon-mafuyu.png',
                'stamp' => 'img/personajes/stamp-mafuyu.png',
                'sticker' => 'img/personajes/sticker-mafuyu.png',
                'comic' => 'img/personajes/comic-mafuyu.png',
            ],
            [
                'nombre' => 'Ena Shinonome',
                'grupo_id' => 5,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-ena.png',
                'chibi' => 'img/personajes/chibi-ena.png',
                'icon' => 'img/personajes/icon-ena.png',
                'stamp' => 'img/personajes/stamp-ena.png',
                'sticker' => 'img/personajes/sticker-ena.png',
                'comic' => 'img/personajes/comic-ena.png',
            ],
            [
                'nombre' => 'Mizuki Akiyama',
                'grupo_id' => 5,
                'historia' => 'aaa',
                'personalidad' => 'bbb',
                'imagen' => 'img/personajes/img-mizuki.png',
                'chibi' => 'img/personajes/chibi-mizuki.png',
                'icon' => 'img/personajes/icon-mizuki.png',
                'stamp' => 'img/personajes/stamp-mizuki.png',
                'sticker' => 'img/personajes/sticker-mizuki.png',
                'comic' => 'img/personajes/comic-mizuki.png',
            ],
        ]);
    }
}
