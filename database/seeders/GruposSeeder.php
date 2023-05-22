<?php

namespace Database\Seeders;

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
                'historia' => 'Las integrantes de Leo/need eran amigas de la infancia y tocaban música juntas. Sin embargo, su relación se torció tras cierto incidente en el colegio. Cuando Saki vuelve durante el instituto, la banda se reforma con la ayuda de los Virtual Singers.

                Un día, Ichika descubre una canción llamada "Untitled" en su teléfono. Allí conoce a Miku y Luka, que le dan la bienvenida al SEKAI y la invitan a tocar con ellas con el objetivo de reunir a la banda de nuevo y ayudar a las chicas a encontrar sus verdaderos sentimientos.'
            ],
            [
                'nombre' => 'MORE MORE JUMP!',
                'logo' => 'img/grupos/logo-mmj.png',
                'imagen' => 'img/grupos/img-mmj.png',
                'historia' => 'Minori soñaba con convertirse en idol desde que vio a Haruka en la televisión. Después de que Haruka dejara de ser idol, se hicieron amigas. Minori y los Virtual Singers convencerán a Haruka de volver a ser idol y formar así MORE MORE JUMP! junto a Airi y Shizuku.

                Durante los ensayos, el grupo descubre una canción llamada "Untitled" en sus teléfonos. Al tocarla, son transportadas al SEKAI. Allí conocen a Miku y Rin, que actúan como idols en el Stage SEKAI.'
            ],
            [
                'nombre' => 'Vivid BAD SQUAD',
                'logo' => 'img/grupos/logo-vbs.png',
                'imagen' => 'img/grupos/img-vbs.png',
                'historia' => 'Kohane se encuentra a An y su banda en el Weekend Garage, pero huye por timidez. Al volver una semana después, An la invita a cantar y, al darse cuenta de su potencial, la invita a formar una banda: Vivids. Allí conocen a BAD DOGS, Akito y Toya. Akito las invita a un evento y, mientras creaban la lista de reproducción, Kohane descubre una canción llamada "Untitled" en su teléfono.

                Al descargarla, An y Kohane son transportadas al SEKAI, donde Miku y MEIKO les dan la bienvenida, conociendo también a Rin y Len. Inicialmente compuesto por dos grupos competidores, sus experiencias en el SEKAI unen a los cuatro para alcanzar un nuevo nivel de talento musical como grupo de estilo musical callejero.'
            ],
            [
                'nombre' => 'Wonderlands x Showtime',
                'logo' => 'img/grupos/logo-wxs.png',
                'imagen' => 'img/grupos/img-wxs.png',
                'historia' => 'Tras fracasar en su audición, Tsukasa es contratado por Emu para devolver al Phoenix Wonderland Stage a su antigua gloria con increíbles actuaciones. Ambos actores reclutan al director de escena y experto en robótica Rui y a la tímida cantante Nene, junto con su robot réplica, Nene-Robo.

                Mientras Emu intenta convencer a Tsukasa de unirse a la compañía Phoenix Wonderland, Tsukasa descubre una canción llamada "Untitled" en su teléfono. Al reproducirla, ambos son transportados al SEKAI, donde conocerán a Miku, KAITO y los peluches con los que actúan.'
            ],
            [
                'nombre' => 'Nightcord at 25:00',
                'logo' => 'img/grupos/logo-n25.png',
                'imagen' => 'img/grupos/img-n25.png',
                'historia' => 'El círculo fue creado por K con la esperanza de hacer música que "salve a la gente" y les dé esperanza. Recluta a Enanan, Amia y Yuki, comunicándose a través de un chat llamado Nightcord. Inicialmente, los miembros desconocían los nombres reales o apariencias de los demás, excepto Ena, que sube selfies a Internet, aunque sólo las ve Mizuki.

                Un día, Kanade pierde el contacto con uno de los miembros de su círculo. Encuentran un archivo de una canción llamada "Untitled" que es compartida con cada uno de ellos y, al reproducirla, son transportados al Empty SEKAI.'
            ],
        ]);
    }
}
