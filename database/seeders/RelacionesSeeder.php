<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=RelacionesSeeder
        DB::table('relaciones')->insert([
            // ** Ichika **
            [
                'pj1_id' => 1,
                'pj2_id' => 2,
                'descripcion' => 'Amigas de la infancia y compañeras de banda. Ichika disfruta del comportamiento alegre y la sonrisa persistente de Saki, mientras que Saki se alegra de que Ichika siempre esté ahí para ella. Ichika fue quien visitó a Saki durante la mayor parte de su estancia en el hospital, aparte de su familia inmediata, lo que Saki agradece. Ichika a veces se preocupa de que Saki esté trabajando demasiado mientras intenta experimentar todo lo que se perdió cuando era preadolescente. Ichika dice que a Saki se le da bien animar a la gente.',
            ],
            [
                'pj1_id' => 1,
                'pj2_id' => 3,
                'descripcion' => 'Amigas de la infancia y compañeras de banda. Su relación se volvió tensa con el paso de los años debido a que Honami temía que interactuar con ella provocara que sus compañeros de clase la acosaran. Ichika dice que Honami siempre es amable con todo el mundo.',
            ],
            [
                'pj1_id' => 1,
                'pj2_id' => 4,
                'descripcion' => 'Amigas de la infancia y compañeras de banda. Al principio, Shiho no quería hablar con Ichika porque sus compañeros la consideraban grosera y hablaba mal de sus amigos. Shiho se toma la banda muy en serio y es su crítica más dura, pero Ichika aprecia su honestidad y habilidad. Ichika dice que Shiho tiene buen juicio.',
            ],
            [
                'pj1_id' => 1,
                'pj2_id' => 6,
                'descripcion' => 'Compañeras de clase de 1-C. Ichika es una de las pocas personas que no trata a Haruka de forma diferente debido a su condición de antigua idol.',
            ],
            [
                'pj1_id' => 1,
                'pj2_id' => 13,
                'descripcion' => 'Ichika lo describe como "bueno despertando a la gente".',
            ],
            [
                'pj1_id' => 1,
                'pj2_id' => 15,
                'descripcion' => 'Ichika admira su voz y aspira a cantar como ella. Nene da clases de canto a Ichika, a petición de ésta.',
            ],
            [
                'pj1_id' => 1,
                'pj2_id' => 17,
                'descripcion' => 'Una vez se vieron de pasada en la tienda de música, y ambas pensaron que la otra tenía un pelo muy bonito.',
            ],
            // ** Saki **
            [
                'pj1_id' => 2,
                'pj2_id' => 3,
                'descripcion' => 'Amigos de la infancia y compañeras de banda. Habían perdido el contacto debido a la hospitalización de Saki, pero desde entonces se han reencontrado. Saki siempre intenta hacerla sonreír con abrazos y tarta de manzana.',
            ],
            [
                'pj1_id' => 2,
                'pj2_id' => 4,
                'descripcion' => 'Amigos de la infancia y compañeros de banda. Su relación fue tensa en el pasado, pero desde entonces se han reunido y estrechado sus lazos. Saki cree que Shiho puede ser demasiado estricta, pero admira sus habilidades como músico y disfruta siendo elogiada por ella.',
            ],
            [
                'pj1_id' => 2,
                'pj2_id' => 5,
                'descripcion' => 'Compañeras de trabajo en la cafetería en la que trabaja a tiempo parcial.',
            ],
            [
                'pj1_id' => 2,
                'pj2_id' => 6,
                'descripcion' => 'Compañeras de clase de 1-C. Miembros del Comité del Festival Deportivo.',
            ],
            [
                'pj1_id' => 2,
                'pj2_id' => 7,
                'descripcion' => 'Saki es una gran admiradora de Airi y, mientras estuvo hospitalizada, se entretuvo viendo programas de variedades en los que aparecía. Cuando se encontró con Airi en el colegio, le pidió un autógrafo y un apretón de manos.',
            ],
            [
                'pj1_id' => 2,
                'pj2_id' => 12,
                'descripcion' => 'Toya es amigo de la infancia de los dos hermanos Tenma, ya que sus padres se conocieron tocando el piano. Suele pasarle a Tsukasa los peluches que gana en los recreativos para que se los dé a Saki, ya que no puede llevárselos a casa por miedo a que su padre se enfade. Sigue preocupado por el estado de Saki y pregunta por su salud cuando sale con ella y Tsukasa después de clase.',
            ],
            [
                'pj1_id' => 2,
                'pj2_id' => 13,
                'descripcion' => 'Tsukasa es el hermano mayor de Saki. Se demuestra que Tsukasa cuidó de ella cuando estuvo enferma. Quería que Saki y sus amigos de la infancia volvieran a estar juntos, ya que en parte se culpaba por no haber evitado su separación. Tsukasa suele presumir delante de Saki y los demás, lo que acaba en caos, para vergüenza de Saki. A pesar de ello, Tsukasa se esfuerza por proteger su amistad para que pueda llevar una vida normal en el instituto. Saki le admira enormemente.',
            ],
            [
                'pj1_id' => 2,
                'pj2_id' => 14,
                'descripcion' => 'Participaron juntas en el Festival Deportivo de Miyamasuzaka y formaron parte del comité. Cuando se conocieron, Saki comentó que Emu le recordaba a Tsukasa, a pesar de no saber que entonces formaban parte de la misma compañía de teatro.',
            ],
            // ** Honami **
            [
                'pj1_id' => 3,
                'pj2_id' => 4,
                'descripcion' => 'Amigas de la infancia y compañeras de banda. Aunque en una ocasión Honami apartó a Shiho por miedo a que fuera acosada por otros compañeros, desde entonces han hecho las paces. En ocasiones, Shiho puede expresar críticas un tanto duras contra Honami, pero ésta se da cuenta de que a veces los amigos necesitan ser duros con los demás para hacerse mejores personas.',
            ],
            [
                'pj1_id' => 3,
                'pj2_id' => 5,
                'descripcion' => 'Compañeras de escuela y amigas. Las dos suelen pasear juntas a sus perros.',
            ],
            [
                'pj1_id' => 3,
                'pj2_id' => 13,
                'descripcion' => 'Tsukasa es el hermano mayor de Saki. Aunque Shiho piensa que es un buen hermano mayor, también parece tener dificultades para encontrar alguna buena cualidad suya aparte de ser simpático. Aún reprende a Shiho por llamarle bocazas.',
            ],
            [
                'pj1_id' => 3,
                'pj2_id' => 14,
                'descripcion' => 'Amigas y compañeras de clase de 1-B.',
            ],
            [
                'pj1_id' => 3,
                'pj2_id' => 17,
                'descripcion' => 'Honami trabaja como ama de casa de Kanade. Las dos mantienen una relación amistosa y Kanade le pide consejo de vez en cuando.',
            ],
            // ** Shiho **
            [
                'pj1_id' => 4,
                'pj2_id' => 5,
                'descripcion' => 'Compañeras de clase de 1-A. De vez en cuando pasan tiempo juntas fuera de la escuela.',
            ],
            [
                'pj1_id' => 4,
                'pj2_id' => 8,
                'descripcion' => 'Shizuku es la hermana mayor de Shiho. Shizuku adora a Shiho con frecuencia, incluso se presenta a su clase en la escuela, lo que molesta a Shiho. A pesar de ello, Shiho se preocupa mucho por su hermana y agradece todo lo que Shizuku ha hecho por ella. A veces se siente avergonzada por las tendencias testarudas de su hermana.',
            ],
            [
                'pj1_id' => 4,
                'pj2_id' => 9,
                'descripcion' => 'Compañeras de clase de 1-A. De vez en cuando salen fuera de clase. Kohane cree que Shiho es guay, y al principio se sintió intimidada por ella debido a su actitud distante. Con el tiempo, las dos estrechan lazos gracias a la música y pueden hablar más entre ellas.',
            ],
            [
                'pj1_id' => 4,
                'pj2_id' => 13,
                'descripcion' => 'Tsukasa es el hermano mayor de Saki. Shiho lo describe como ruidoso.',
            ],
            [
                'pj1_id' => 4,
                'pj2_id' => 14,
                'descripcion' => 'Amigas. Shiho se puso nerviosa después de que Emu intentara que hiciera la pose "Wonderhoy".',
            ],
            // ** Minori **
            [
                'pj1_id' => 5,
                'pj2_id' => 6,
                'descripcion' => 'Haruka es ídolo de Minori desde hace tiempo, y ahora también es compañera de grupo y amiga. Minori quiere ser como ella, y alaba a Haruka hasta un punto a veces incómodo. Minori quiere expresar toda su gratitud y devolverle algo a Haruka a cambio de haberle dado tantas esperanzas cuando era más joven. Haruka agradece enormemente a Minori que le haya devuelto la esperanza, aunque desearía que Minori la viera más como una amiga normal que como una idol.',
            ],
            [
                'pj1_id' => 5,
                'pj2_id' => 7,
                'descripcion' => 'Compañeras de grupo y amigas. Airi fue la primera en enseñar a Minori cómo ser una idol, y continúa enseñándole después de que se formara su grupo. Aunque puede ser dura con Minori, sobre todo cuando se conocen, Minori valora la pasión y la experiencia de Airi.',
            ],
            [
                'pj1_id' => 5,
                'pj2_id' => 8,
                'descripcion' => 'Compañeras de grupo y amigas. Minori está fascinada por su belleza y su elegancia. Admira el carácter trabajador de Shizuku, y Shizuku la considera una buena amiga.',
            ],
            [
                'pj1_id' => 5,
                'pj2_id' => 9,
                'descripcion' => 'Compañera de escuela y mejores amigas. Ambas fueron la primera amiga de la otra en el instituto y, de vez en cuando, salen juntas fuera de clase.',
            ],
            // ** Haruka **
            [
                'pj1_id' => 6,
                'pj2_id' => 7,
                'descripcion' => 'Compañeras de grupo. Haruka piensa que Airi está infravalorada en el mundo de las idols.',
            ],
            [
                'pj1_id' => 6,
                'pj2_id' => 8,
                'descripcion' => 'Compañeras de grupo. Como miembros de ASRUN y Cheerful*Days, habían actuado juntas antes de formar MORE MORE JUMP! y, durante su primer encuentro, Haruka consoló a Shizuku y la felicitó por trabajar más duro que nadie en el grupo. Haruka aprecia su duro trabajo y la anima a ser su yo imperfecto y más auténtico ante sus fans.',
            ],
            [
                'pj1_id' => 6,
                'pj2_id' => 9,
                'descripcion' => 'Amigas. Haruka disfruta de tomarle el pelo a Kohane.',
            ],
            [
                'pj1_id' => 6,
                'pj2_id' => 10,
                'descripcion' => 'Amigas de la infancia desde la escuela primaria. Haruka era competitiva y a menudo competía con An en concursos tontos, como quién corría más rápido o quién se comía antes todo el almuerzo. Sin embargo, se separaron cuando Haruka fue a Miyamasuzaka y An al instituto Kamiyama. Siguen saliendo juntas fuera de la escuela.',
            ],
            [
                'pj1_id' => 6,
                'pj2_id' => 14,
                'descripcion' => 'Amigas. Cuando Emu expresa su deseo de hacer del Festival Deportivo un evento que deje a la gente motivada incluso cuando haya terminado, a Haruka le recuerda a Minori y su determinación de llevar esperanza a la gente. Esta similitud es lo que impulsa a Haruka a ofrecer su apoyo y ayuda a Emu, a lo que esta última se muestra agradecida. A partir de ahí se hacen buenas amigas, y ambas prometen seguir esforzándose juntas al final del Festival Deportivo.',
            ],
            // ** Airi **
            [
                'pj1_id' => 7,
                'pj2_id' => 8,
                'descripcion' => 'Compañeras de grupo y amigas íntimas. Las dos debutaron como idols al mismo tiempo y trabajaron en la misma agencia. Aunque Airi consideraba a Shizuku una rival, se apoyaban mutuamente y se ayudaban a superar sus debuts. Por desgracia, a medida que sus carreras despegaban, Airi empezó a sentir celos de la belleza y el éxito de Shizuku. Tras la formación de MORE MORE JUMP!, las dos se vuelven más cercanas y Airi actúa a menudo de forma protectora con ella. Las dos son también compañeras de clase.',
            ],
            [
                'pj1_id' => 7,
                'pj2_id' => 10,
                'descripcion' => 'Conocidas. Se conocen más a fondo cuando posan en las fotos de boda de grupo con Shizuku y Kohane.',
            ],
            [
                'pj1_id' => 7,
                'pj2_id' => 11,
                'descripcion' => 'Conocidos. Se conocieron en la secundaria, y Airi le saludaba de vez en cuando cuando visitaba la casa de los Shinonome. No son particularmente cercanos. Airi habló con Akito sobre los problemas de Ena con su padre, que ella le había ocultado. En agradecimiento por todo lo que Ena había hecho por ella, Airi le pidió a Akito que cuidara de Ena en su lugar.',
            ],
            [
                'pj1_id' => 7,
                'pj2_id' => 19,
                'descripcion' => 'Amigas íntimas. Empezaron a hablar cuando Ena la defendió en la secundaria, ya que la gente se burlaba de su aspecto en un variety show. Airi dice que tiene "ojo para la moda", y Ena la ayudó a ir más a la moda antes de hacerse famosa como idol. También tienen cosas a juego, como cojines de gato amarillo. Airi también admira a Ena por su perseverancia, que considera su mejor cualidad.',
            ],
            // ** Shizuku **
            [
                'pj1_id' => 8,
                'pj2_id' => 10,
                'descripcion' => 'Aunque se vieron por primera vez durante una sesión de fotos de boda, An ya conocía a Shizuku porque formaba parte de Cheerful*Days, mientras que Shizuku conocía a An por Haruka. Desde entonces, se han hecho buenas amigas.',
            ],
            [
                'pj1_id' => 8,
                'pj2_id' => 13,
                'descripcion' => 'Conocidos de la infancia. Al igual que Shiho y Saki eran amigas de la infancia, Tsukasa y Shizuku también lo eran, aunque no tanto como sus hermanos. Solían jugar juntos en el parque.',
            ],
            // ** Kohane **
            [
                'pj1_id' => 9,
                'pj2_id' => 10,
                'descripcion' => 'Compañeras de grupo y de canto. Las dos están muy unidas, ya que An fue la primera persona que dio confianza a Kohane para actuar en el escenario. Ambas se consideran compañeras y confían la una en la otra a la hora de actuar. A An le gusta presumir de Kohane ante los demás, lo que a menudo pone nerviosa a Kohane. Akito ha mencionado que An "sólo habla de Kohane", y que ambas forman un dúo inseparable. A pesar de esto, An muestra sentimientos de inferioridad hacia Kohane.',
            ],
            [
                'pj1_id' => 9,
                'pj2_id' => 11,
                'descripcion' => 'Compañeros de grupo. Kohane se sentía algo intimidada por él debido a su hostilidad inicial hacia ella y An, pero aun así le ayudó, y Toya reconcilió su alianza tras su pelea. Akito respeta el talento de Kohane y su afán de superación, mientras que Kohane respeta su habilidad y le está agradecida por enseñarle muchas cosas sobre la música callejera. Akito a veces se aprovecha de su personalidad tímida para sacarle una reacción humorística, para desaprobación de An y Toya.',
            ],
            [
                'pj1_id' => 9,
                'pj2_id' => 12,
                'descripcion' => 'Compañeros de grupo. Kohane le cuenta sus preocupaciones a Toya, diciendo que no quiere volver a fracasar, antes de preguntarle cómo practicó para llegar a su nivel de habilidad. Toya menciona que mejoró actuando en público, y cómo la verdadera diferencia entre novatos y profesionales es cuántas veces han actuado ante el público. Explica con detalle cómo una buena técnica y un talento innato pueden enmascarar las horas dedicadas a practicar, pero lo que realmente importa y ayuda al final es actuar delante de los demás, y también junto a los demás. Kohane se siente un poco insegura, antes de afirmar que quiere hacerlo. Toya se alegra al ver su determinación y luego menciona que debería hablar con An para aclarar las cosas. Son muy buenos amigos.',
            ],
            [
                'pj1_id' => 9,
                'pj2_id' => 14,
                'descripcion' => 'Amigas. Se demuestra que Kohane puede entender el estilo de hablar de Emu, hasta el punto de que Kohane fue capaz de guiar a Emu con onomatopeyas durante una competición de romper sandías.',
            ],
            [
                'pj1_id' => 9,
                'pj2_id' => 20,
                'descripcion' => 'Se encontraron brevemente a través de An durante el Festival del Instituto Kamiyama antes de que Mizuki huyera.',
            ],
            // ** An **
            [
                'pj1_id' => 10,
                'pj2_id' => 11,
                'descripcion' => 'Compañeros de grupo. An y Akito se conocen desde la secundaria debido a las frecuentes visitas de Akito al WEEKEND GARAGE tras su experiencia con RAD WEEKEND. Sin embargo, no eran particularmente cercanos. Tras convertirse en Vivid BAD SQUAD, se forma entre ellos una rivalidad más amistosa y discuten por varias cosas, para consternación de Kohane. Su rivalidad les impulsa a dar lo mejor de sí mismos en cada actuación y realizan un gran trabajo en equipo para superar la popularidad de RAD WEEKEND.',
            ],
            [
                'pj1_id' => 10,
                'pj2_id' => 12,
                'descripcion' => 'Compañeros de grupo. Se conocen desde la secundaria. Sin embargo, no eran especialmente cercanas hasta después de que Vivids y BAD DOGS se unieran para convertirse en Vivid BAD SQUAD. Toya reconoce su talento y su sueño de superar a RAD WEEKEND, afirmando que es "como Akito" en ese sentido, y An parece respetarle mutuamente.',
            ],
            [
                'pj1_id' => 10,
                'pj2_id' => 20,
                'descripcion' => 'Tienen una buena amistad y son de la misma clase en 1-A. An conoce el secreto de Mizuki, y se demuestra que An es una de las pocas personas que trata a Mizuki como a una persona normal. An invita a Mizuki al festival escolar con la seguridad de que no destacará demasiado, ya que mucha gente ya va disfrazada. Disfrutan especialmente hablando de moda, y a Mizuki también le gusta asustar a An con historias de fantasmas.',
            ],
            // ** Akito **
            [
                'pj1_id' => 11,
                'pj2_id' => 12,
                'descripcion' => 'Compañeros de grupo y de canto. Akito conoció a Toya cuando éste actuaba en la calle y quedó intrigado por él, invitándole a cantar juntos. Rápidamente formaron BAD DOGS después de eso. Akito confía plenamente en Toya y es consciente de su relación negativa con su padre. Están muy unidos y a menudo se apoyan el uno en el otro mientras actúan. Toya cree que su determinación es demasiado débil y que arrastrará a Akito, por lo que rompe su asociación con él. Sin embargo, Akito se enfrenta a él en la cafetería de Ken, reconociendo su habilidad, su dedicación y la fuerza de su vínculo. Esto hace que Toya se dé cuenta de que realmente quiere perseguir el sueño de superar RAD WEEKEND junto a Akito. Se reúnen como compañeros más fuertes que nunca.',
            ],
            [
                'pj1_id' => 11,
                'pj2_id' => 13,
                'descripcion' => 'Compañeros. Akito lo considera un bicho raro, y parece disfrutar burlándose de él. Se insinúa que está celoso de Tsukasa, debido al apego de Toya hacia él. Después de aprender más sobre su historia, Akito menciona que le debe a Tsukasa su agradecimiento por animar a Toya a perseguir lo que le gusta, lo que permitió que Akito y Toya se conocieran. Akito también parece desconfiar de la influencia que Tsukasa y Rui tienen sobre Toya, y a veces actúa de forma protectora con ella cuando están cerca.',
            ],
            [
                'pj1_id' => 11,
                'pj2_id' => 14,
                'descripcion' => 'Conocidos. Aunque él ya la conocía vagamente por su trabajo en Wonderlands x Showtime, no se conocen oficialmente hasta que se encuentran en el Game Center para jugar al torneo. Al igual que con Tsukasa, a Akito le desagradan su excentricidad y sus gritos.',
            ],
            [
                'pj1_id' => 11,
                'pj2_id' => 15,
                'descripcion' => 'Conocidos. Van al mismo colegio y de vez en cuando se ven de pasada. Sin embargo, no son íntimos, y Nene se siente abiertamente intimidada por él. Nene parece ser consciente de su doble personalidad, ya que cuando Emu se sorprende de que deje de sonreír educadamente después de que le obligue a presentarse, dice que Akito es "esa clase de persona".',
            ],
            [
                'pj1_id' => 11,
                'pj2_id' => 16,
                'descripcion' => 'Akito conoce a Rui por haber asistido a la misma escuela. Él es la segunda mitad de la pareja que Akito ha considerado "Rarito Uno y Dos", siendo "Rarito Uno" Tsukasa. A Akito no le gusta Rui por sus tendencias manipuladoras, pues una vez se da cuenta de que Rui estaba usando psicología inversa con él y se enfada. Aunque acaba ayudando a Rui como extra en la boda, le recuerda que sólo lo hace por el bien de Toya. Akito ayuda a Rui a regañadientes a ir a la tienda médica después de que Rui se haga daño en el brazo. Se da a entender que lo hace porque no quiere que la lesión de Rui ponga en peligro la actuación de Wonderlands x Showtime, y se muestra preocupado cuando parece que Rui no va a volver con su grupo a tiempo, calmándose cuando lo hace. A pesar de que los dos parecen acercarse a través de estas interacciones, él todavía se niega a participar en las locuras de Rui que a menudo obliga a Tsukasa a realizar.',
            ],
            [
                'pj1_id' => 11,
                'pj2_id' => 19,
                'descripcion' => 'Ena es la hermana mayor de Akito. Inicialmente se muestra que Ena rara vez le presta atención, ya que siempre está centrada en chatear con sus amigos en línea. Debido a que Ena asiste a la escuela nocturna, rara vez se ven durante el día. Sus preferencias alimentarias son similares: a ambos les gustan las tortitas y la tarta de queso, pero no las zanahorias. Ena tiende a utilizarlo como su chico de los recados, para su disgusto; a pesar de ello, parece que se quieren, ya que Akito aconsejó una vez a su padre que fuera más amable con Ena cuando le diera consejos. Ena es la responsable de que Akito se interese por la música callejera, ya que le enseñó una actuación en directo después de que dejara de jugar al fútbol y le instó a que probara con la música.',
            ],
            [
                'pj1_id' => 11,
                'pj2_id' => 20,
                'descripcion' => 'Mizuki le llama hermanito a Akito muy a su pesar. Se conocieron por primera vez durante el Festival Escolar de Kamiyama. Mizuki reconoció su voz por el fondo de las llamadas de Ena.',
            ],
            [
                'pj1_id' => 12,
                'pj2_id' => 13,
                'descripcion' => 'Amigos de la infancia, ya que sus padres se conocieron tocando el piano. Toya considera a Tsukasa su "salvador", ya que fue Tsukasa quien le dijo que estaba bien hacer las cosas que quería, incluso si los demás no lo aprobaban. Esto le dio a Toya el valor para dejar la música clásica, y dice que si no fuera por Tsukasa, no sería la persona que es hoy. De vez en cuando, Toya le da a Tsukasa los peluches que gana en los juegos de la grulla para que se los dé a Saki. Sin embargo, el propio Tsukasa a veces guarda y cuida los peluches que les regalan. Después de darse cuenta de las payasadas de Akito hacia Tsukasa, se vuelve pasivamente protector con él, llegando incluso a advertir a Akito de que no le haga nada a Tsukasa.',
            ],
            [
                'pj1_id' => 12,
                'pj2_id' => 14,
                'descripcion' => 'Conocidos. Aunque Emu ya lo conocía a través de su amistad con Tsukasa, se presentaron oficialmente cuando ella se asoció con Nene para el torneo de juegos arcade en el que jugaron en equipos contrarios con su respectiva pareja.',
            ],
            [
                'pj1_id' => 12,
                'pj2_id' => 15,
                'descripcion' => 'Compañeros de clase en 1-B. Una vez Toya vio a Nene viendo un musical a la hora de comer, antes de que ella se molestara y le diera el título del musical para que ella pudiera seguir viéndolo sola. Después de esto, se demuestra que ambos se llevan bien. Se vuelven más cercanos debido a su interés compartido en los juegos, y Nene lo describe como un "amigo de juegos".',
            ],
            [
                'pj1_id' => 12,
                'pj2_id' => 16,
                'descripcion' => 'Compañeros. Toya conoce a Rui por todos los rumores que corren sobre él en la escuela. Toya considera a Rui como un excelente director que puede comprometerse en cualquier situación difícil que se le presente. Rui anima a Toya a no rendirse.',
            ],
            [
                'pj1_id' => 12,
                'pj2_id' => 19,
                'descripcion' => 'Ena es la hermana mayor de Akito. De vez en cuando, Toya le da a Akito los peluches que gana en las máquinas de garras para que se los dé a Ena, ya que no puede llevárselos a casa por miedo a que su padre se enfade. A pesar de que la pareja no está muy unida, Ena es uno de los pocos personajes a los que Toya se refiere por su nombre de pila, ya que la llama "Ena-san" cuando no se refiere a ella como "la hermana de Akito". Esto se debe probablemente a que es la hermana de alguien a quien conoce desde hace mucho tiempo.',
            ],
            [
                'pj1_id' => 12,
                'pj2_id' => 20,
                'descripcion' => 'Compañeros de escuela. Se conocieron durante el Festival del Instituto Kamiyama. Mizuki, Toya y Akito fueron juntos a ver actuar a Tsukasa. Mizuki disfrutó de la actuación de Tsukasa, lo que hizo feliz a Toya.',
            ],
            [
                'pj1_id' => 13,
                'pj2_id' => 14,
                'descripcion' => 'Compañeroos de grupo y buenos amigos. Trabajan juntos para devolver al Wonder Stage de Phoenix Wonderland su antiguo esplendor, aunque al principio Tsukasa piensa que ella es rara y que nunca escucha a nadie. Aunque a él le cansan sus payasadas hiperactivas, ambos estrechan lazos por su deseo mutuo de hacer sonreír a la gente con sus espectáculos.',
            ],
            [
                'pj1_id' => 13,
                'pj2_id' => 15,
                'descripcion' => 'Compañeros de grupo y amigos. Nene piensa que él es un idiota, mientras que Tsukasa la llama la diva del grupo. Tsukasa respeta sus habilidades como actriz y cantante. Comparten el mismo cansancio por las payasadas de Emu y Rui.',
            ],
            [
                'pj1_id' => 13,
                'pj2_id' => 16,
                'descripcion' => 'Compañeros de grupo y amigos. Rui lo considera un actor digno del escenario, mientras que Tsukasa piensa que es genial pero está loco. Los dos son un conocido "dúo de bichos raros" en la escuela y, a veces se les llama el "Wombo Combo de Raritos". Tsukasa toma con orgullo cualquier locura y papeles sugeridos por Rui, aunque a menudo se queja de ellos.',
            ],
            [
                'pj1_id' => 14,
                'pj2_id' => 15,
                'descripcion' => 'Compañeras de grupo y amigas. Emu cree que Nene tiene mucho talento para cantar, mientras que Nene piensa que Emu es un bicho raro junto con el resto de su grupo. A pesar de ello, Nene se preocupa de verdad por Emu y no duda en defenderla ante sus hermanos. Nene quiere ayudar a Emu a conseguir su objetivo.',
            ],
            [
                'pj1_id' => 14,
                'pj2_id' => 16,
                'descripcion' => 'Compañeros de grupo y amigos. A Emu le impresionan sus tendencias exageradas y piensa que es divertido, mientras que Rui piensa que es maravillosamente bizarra. Rui y Emu sintonizan muy bien, los dos son capaces de comunicarse incluso cuando Tsukasa y Nene no les entienden.',
            ],
            [
                'pj1_id' => 14,
                'pj2_id' => 18,
                'descripcion' => 'Mafuyu formó pareja con Emu en la carrera de tres piernas durante el Festival Deportivo de Miyamasuzaka. Emu se da cuenta de que las sonrisas de Mafuyu no son reales y, por eso, le tiene un miedo atroz. A pesar de que Mafuyu le da miedo, expresa su deseo de hacerla sonreír de verdad, aunque sus esfuerzos no suelen dar resultado. ',
            ],
            [
                'pj1_id' => 14,
                'pj2_id' => 19,
                'descripcion' => 'Cuando Emu y Ena se conocieron, al principio Ena sintió mucha envidia de las habilidades de dibujo de Emu. Sin embargo, Emu expresó que le gustaba el arte de Ena, sorprendiendo a esta última, y que defendería a Ena si alguien se burlaba de sus dibujos.',
            ],
            [
                'pj1_id' => 15,
                'pj2_id' => 16,
                'descripcion' => 'Compañeros de grupo. Son vecinos y amigos de la infancia, aunque se distanciaron un poco en la secundaria. Nene piensa que es un entrometido, pero se preocupa por su bienestar mental y se alegra de ver que está mejor. Rui suele ayudar a Nene con sus problemas, y viceversa. Ambos se inspiraron para hacer teatro después de ver la misma obra.',
            ],
            [
                'pj1_id' => 16,
                'pj2_id' => 18,
                'descripcion' => 'Rui conoce a Mafuyu a través de Mizuki. Fue capaz de deducir la verdadera personalidad de Mafuyu gracias a la información de Mizuki. Mas tarde le da un consejo a Mafuyu, diciendo que no debe seguir demasiado los deseos de su madre y que debe enfrentarse a ella para saber lo que Mafuyu realmente quiere.',
            ],
            [
                'pj1_id' => 16,
                'pj2_id' => 20,
                'descripcion' => 'Amigos desde la secundaria. Se unieron por ser marginados, pasando el rato juntos en el tejado y saltándose casi siempre las clases. Más adelante, Rui parece feliz de ver que Mizuki ha encontrado amigos. Mizuki fue quien creó los trajes de escenario de Rui y Nene.',
            ],
            [
                'pj1_id' => 17,
                'pj2_id' => 18,
                'descripcion' => 'Compañeras del círculo. Kanade simpatiza con ella e intenta desesperadamente salvar a Mafuyu con su música. Anima a Mafuyu a ser sincera y le pregunta a menudo por sus sentimientos, pensando que tendrá más posibilidades de salvarla si la comprende mejor.',
            ],
            [
                'pj1_id' => 17,
                'pj2_id' => 19,
                'descripcion' => 'Compañeras de círculo. Kanade cree que Ena oculta sus verdaderos sentimientos cuando dibuja, pero al mismo tiempo valora sus habilidades artísticas y ha dicho que su círculo no sería lo mismo sin el arte de Ena.',
            ],
            [
                'pj1_id' => 17,
                'pj2_id' => 20,
                'descripcion' => 'Compañeras de círculo. Kanade aprecia el talento y la personalidad amistosa de Mizuki. Kanade también agradece que le ayude a recordar algo importante, que es el recuerdo de infancia de jugar en el parque y ver el parterre de claveles con sus padres.',
            ],
            [
                'pj1_id' => 18,
                'pj2_id' => 19,
                'descripcion' => 'Compañeras de círculo. Mafuyu es muy brusca a la hora de expresar sus opiniones sobre el arte de Ena, lo que a menudo saca de quicio a ésta. Aunque al principio la relación entre ambas es difícil, con el tiempo llegan a comprender sus luchas y empiezan a respetarse más. También es gracias a las palabras de Mafuyu que Ena sale de su depresión, vuelve al mundo real y sigue dibujando. Mafuyu aprecia que Ena diga las cosas sin rodeos en lugar de endulzar sus palabras.',
            ],
            [
                'pj1_id' => 18,
                'pj2_id' => 20,
                'descripcion' => 'Compañera de círculo. Mafuyu cree que está demasiado obsesionadas con las cosas monas, mientras que Mizuki piensa que lo que Mafuyu está viviendo se siente como algo personal, ya que ambas están lidiando con problemas relacionados con sus identidades. Mizuki también siente un poco de envidia al ver que Mafuyu hace todo lo posible por intentar encontrarse a sí misma y no rendirse, mientras que Mizuki se empeña en no contarle su secreto a nadie.',
            ],
            [
                'pj1_id' => 19,
                'pj2_id' => 20,
                'descripcion' => 'Compañeras de círculo. Se llevan bien y salen a menudo, aunque a Mizuki le gusta tomarle el pelo de vez en cuando. Ena empieza a preocuparse por Mizuki, al reconocer que está actuando de forma diferente a la habitual. Ena se preocupa mucho por Mizuki y quiere ayudarle con sus problemas, incluso planea un picnic en un intento de animarlas. Ena decide que esperará eternamente a que Mizuki le cuente su secreto, dándole tiempo a Mizuki para que abra su corazón por la bondad de Ena.',
            ],
        ]);
    }
}
