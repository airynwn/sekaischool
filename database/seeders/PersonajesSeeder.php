<?php

namespace Database\Seeders;

use App\Models\Personaje;
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
        $personajes = [
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
                'historia' => 'Cuando Minori era pequeña, solía tener mala suerte. Un día, cuando se le cayó el testigo en una carrera de relevos en el colegio, Minori se quedó en casa porque se sentía culpable y temía que sus compañeros se enfadaran con ella. Entonces vio a Haruka, de ASRUN, cantando en solitario en la televisión. Las palabras de Haruka de que "mañana siempre será un día mejor" animaron a Minori, y desde entonces es fan de Haruka.
                Al igual que su eterna inspiración, Minori también se ha propuesto convertirse en idol. Se ha presentado a más de 50 audiciones, pero ha fracasado en todas. A pesar de ello, nunca se rinde y sigue intentándolo para alcanzar su sueño. Mientras practica en el tejado de su escuela, conoce a Haruka, quien, junto con Airi y Shizuku, la ayuda a entrenarse para convertirse en una idol hecha y derecha. Gracias a su carácter positivo y trabajador, Minori inspira esperanza a las demás ex idols y todas acaban formando juntas MORE MORE JUMP!
                Es compañera de Shiho y Kohane. Forma parte del Comité de Cuidado de Animales con Kohane.',
                'personalidad' => 'Minori es una chica optimista y trabajadora que ha demostrado su determinación y dedicación para convertirse en idol, algo por lo que los demás suelen felicitarla. Tiene un corazón bondadoso e intenta ser considerada con los demás.
                Sin embargo, también es torpe, tiende a asustarse con facilidad y a menudo tiene problemas para mantener la compostura. A esto se une su costumbre de decir lo que se le pasa por la cabeza, y parece que le resulta fácil expresar sus emociones sin control, a propósito o no.
                Admira a muchos de sus amigos y compañeros y aspira a ser como ellos. A medida que crece como persona y como futura idol, desea alcanzar la felicidad que Haruka solía sentir como idol antes de retirarse. Aunque no lo parezca al conocerla, es una joven empática y emocionalmente madura. Tiene la costumbre de repetir la frase "más y más".',
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
                'historia' => 'Haruka formaba parte del grupo de idols ASRUN, aclamado en todo el país, y era la más popular de todos los miembros del grupo. Tras una discusión con uno de los miembros de su grupo, se retiró como idol y se convirtió en una estudiante normal de la Academia de Chicas Miyamasuzaka. Poco después de retirarse, conoce a Minori en la azotea buscando un lugar para leer. Poco después, Minori, Airi y Shizuku la invitan a crear MORE MORE JUMP! con ellas. Al principio se niega, hasta que Mai, antigua miembro de ASRUN, le da ánimos.
                Haruka ama profundamente ser una idol y disfruta especialmente de la visión del escenario cuando los penlights del público se vuelven azules, en apoyo a ella. Le motivaba mucho dar esperanza a sus fans. Durante el declive de Mai, Haruka le aconsejó que siguiera trabajando duro. Por desgracia, Mai se esforzó demasiado y acabó lesionándose las cuerdas vocales. Después de que Mai se enfadara con Haruka y la llamara mentirosa por su frustración, Haruka empezó a verse a sí misma incapaz de ser una idol. Con el tiempo, la culpa se manifestó como un bloqueo psicológico que la incapacitaba para subirse al escenario, ya que le temblaban las piernas sin control. Haruka no tardó en renunciar a la idea de ser una idol.
                Después, Haruka se volvió más melancólica, aceptando que simplemente así serían las cosas. Sin embargo, después de que Minori, Airi y Shizuku realizaran un espectáculo para ella en el Stage SEKAI y le enseñaran la escena de los penlights azules una vez más, se dio cuenta de que realmente quería ser idol. Haruka valora intensamente a MORE MORE JUMP! y se siente más alegre tras la creación del grupo. Haruka a veces se preocupa por el bienestar de Minori, al ver que actúa de forma similar a Mai.
                Es compañera de clase de Ichika y Saki. Forma parte del Comité Ejecutivo del Festival Deportivo junto con Saki y Emu.',
                'personalidad' => 'Haruka es muy carismática, habiendo sido la integrante más popular de ASRUN. En palabras de Minori, es "el tipo de idol capaz de dar a todo el mundo la esperanza de un mañana mejor". Es una persona estricta y comprometida, con rutinas regulares de entrenamientos rigurosos para mantenerse al nivel de una idol. Sin embargo, debido a su excesiva diligencia, le cuesta relajarse y darse un descanso. Se priva de dulces y pasteles, lo que le provoca ansiedad. Está atenta a los horarios y ofertas de las pastelerías.
                Haruka es tranquila pero valiente, sin miedo a replicar y burlarse de sus amigos. Es aficionada al deporte, le gusta el baloncesto y de niña era bastante competitiva. También le encantan los pingüinos, tiene un montón de merchandising de pingüinos y a veces se emociona cuando le regalan algo relacionado con ellos.',
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
                'historia' => 'Airi quería ser una idol cuando era pequeña, ya que admiraba la forma en que bailaban, cantaban y hacían sonreír a la gente, y ella quería conseguir hacer lo mismo. También quería ser más femenina, ya que era consciente de que era una tomboy.
                Más tarde, Airi debutó como miembro del grupo de idols QT. Fue una idol popular que apareció en muchos "variety shows". Uno de sus personajes televisivos más conocidos fue The Masked Variety Idol, Happy Everyday. Debido a su talento en la televisión, su agencia la instó a que dejara de ser idol y se convirtiera en una personalidad del mundo de la televisión. Al escuchar a su representante decir que Airi era una idol mediocre, rechazó la oferta y abandonó el grupo.
                Airi aparentemente renunció a su sueño de ser una idol. Incluso insultó a Minori cuando se conocieron y le dijo que no tenía ninguna posibilidad de convertirse en idol. Sin embargo, al ver el espíritu de Minori, se sintió revigorizada por su determinación de alcanzar su sueño, aceptando así entrenar a Minori y crear MORE MORE JUMP! con Haruka y la antigua rival de Airi, Shizuku.',
                'personalidad' => 'Airi tiene una mentalidad fuerte y a veces puede parecer prepotente. Según Minori, es estricta pero fiable. Es muy protectora con sus amigos y su familia, y odia a los bullies. De niña era más masculina, aunque su madre la reprimía con frecuencia. A día de hoy, Airi aún conserva parte de su actitud testaruda.
                Antes de unirse a su grupo, solía recordar su pasado, amargada por el hecho de que las industrias a las que acudía intentaran utilizarla como personalidad televisiva y dejaran de lado por completo sus actividades como idol. Cuando hacía esto, se volvía brusca e irracional con los que la confrontaban por su actitud, insultándolos, para sentirse culpable después.
                Aunque parezca descarada, Airi se preocupa mucho tanto por sus amigos como por sus hermanos, y adopta un papel de hermana con ambos.',
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
                'historia' => 'Shizuku es una antigua miembro de la tercera generación del grupo de idols Cheerful*Days. Su amiga solicitó el puesto por ella sin que Shizuku lo supiera, pero ella decidió seguir adelante tras ser aceptada. Se formó para convertirse en idol al mismo tiempo que Airi, que la consideraba abiertamente una rival. Es más conocida entre los fans por su aspecto bello, misterioso y maduro. Sin embargo, esto provoca los celos de los demás miembros de su grupo, que piensan que no tiene ningún talento especial y que sólo es popular por su aspecto.
                Un día, Shizuku conoce a Minori en la azotea de la escuela, a quien acepta ayudar a entrenar junto a Airi. Sin embargo, tras las crecientes tensiones en su grupo de idols y una discusión con Airi, decide abandonar Cheerful*Days. Minori y Airi le dan la esperanza de volver a ser idol, y tras realizar un espectáculo para Haruka en el Stage SEKAI, las cuatro forman MORE MORE JUMP!
                Es miembro del Comité de Embellecimiento junto con Honami, y del club de tiro con arco junto con Mafuyu. Es compañera de clase de Airi.',
                'personalidad' => 'Shizuku tiene una personalidad amable y madura. Le preocupa mucho decepcionar a sus fans, ya que siente que debe mantener una imagen "perfecta". Aunque pueda parecer muy tranquila y serena (y a menudo lo es), tiene algunas peculiaridades, como poner sopa de miso en su termo y ser extremadamente mala con la tecnología.
                A medida que crece como idol, quiere dejar de mostrar la imagen del pasado que se vio obligada a mantener para sentirse cómoda, y desea ser fiel a sí misma pase lo que pase. Gracias a los miembros de MORE MORE JUMP! y especialmente a Airi, se dio cuenta de ello y se armó de valor para declarar este cambio.
                Según su hermana Shiho, le encanta pasear, pero no recuerda los nombres de las calles. Como se muestra en múltiples conversaciones de la zona, se pierde incluso en lugares familiares para ella, como el centro comercial.',
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
                'historia' => 'Un día, mientras intenta comprar un CD para su madre, Kohane se pierde y acaba en Vivid Street. Entra en el café WEEKEND GARAGE y se topa con la actuación de An y sus compañeros. La música de An la cautiva y vuelve al café para escucharla cantar. En su segunda visita, An la invita a cantar juntas. El apoyo de An anima a Kohane y juntas forman un dúo conocido como las Vivids.
                Después de competir contra el dúo BAD DOGS, formado por Akito y Toya, Kohane y An forman equipo con ellos para convertirse en Vivid BAD SQUAD y así poder trabajar por su objetivo común de superar el evento musical RAD WEEKEND.
                Es compañera de clase de Shiho y Minori, y es miembro del Comité de Cuidado de Animales con Minori.',
                'personalidad' => 'Kohane es muy bondadosa y reservada. Antes de conocer a An y unirse a Vivid BAD SQUAD, era una chica callada y tímida a la que le faltaba confianza en sí misma y no le gustaba estar en público. Con el tiempo, se vuelve más abierta y valiente. Poco a poco va ganando confianza en sí misma y ya no tiene problemas para comunicarse. Sin embargo, en ocasiones, sigue sintiéndose nerviosa e intimidada ante personas como Akito o Toya, ya que solían ser rivales.
                Kohane es una persona diligente y trabaja duro para mantenerse al día con el resto de su grupo. Aunque es la miembro más inexperta, los demás han observado que es increíblemente buena. alcanzando nuevos niveles de confianza y convirtiendo su canto en un instrumento aún más poderoso que antes.
                A pesar de su timidez, le encantan las cosas exóticas, como las montañas rusas y el puenting. También tiene una serpiente como mascota, a la que An y los demás tienen miedo.',
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
                'historia' => 'An es hija del popular ex músico Shiraishi Ken, que ahora posee un popular café y bar llamado WEEKEND GARAGE, donde ella trabaja. An espera superar algún día el legendario evento que él organizó, llamado RAD WEEKEND. Ha estado vinculada a la música desde que era pequeña, y empezó a cantar en parte porque sentía una conexión natural con ella, y también porque quería ser como su padre. Tiene muchos contactos en el mundo de la música callejera por ser hija de Ken.
                Cuando Kohane volvió a WEEKEND GARAGE después de oír cantar allí a An, ésta la invitó a formar un grupo con ella, llamándose Vivids. Después de algunas rivalidades y conflictos, se unen a Akito y Toya de BAD DOGS para convertirse en Vivid BAD SQUAD, aunque ella y Kohane siguen activas como Vivids.
                Es compañera de clase de Mizuki en el instituto Kamiyama.',
                'personalidad' => 'An es una chica cool y abierta, con un espíritu inquebrantable. Se muestra muy cariñosa con sus amigos íntimos y es muy amable e indulgente. Causa una fuerte impresión en los demás y es difícil de olvidar. An anima a los que la rodean a dar lo mejor de sí mismos. Sin embargo, a veces puede mostrarse inusualmente agresiva con Akito debido a la rivalidad que se formó entre ellos al principio.
                Al formar parte del Comité Disciplinario de Kamiyama, se pone nerviosa al insistir en que se sigan las normas, temblando y tartamudeando al pedir a alguien que se meta la camisa por dentro.',
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
                'historia' => 'Cuando Akito estaba en primaria, jugaba en un equipo de fútbol. Se le daba muy bien, pero decidió dejarlo después de que él y su equipo perdieran un torneo importante. Algún tiempo después de dejar de jugar al fútbol, su hermana mayor, Ena (que entonces estaba en la secundaria), le llevó a la fuerza a un festival de verano. Después de ver un concierto en el festival, Ena le sugirió que probara a cantar y le dio un pequeño discurso, diciéndole que no debía renunciar a las cosas sin siquiera molestarse en probarlas.
                Esto despertó su interés por la música callejera, que con el tiempo se convirtió en el sueño de superar el legendario evento musical RAD WEEKEND. Ahora admira a Shiraishi Ken, el padre de An que actuó en RAD WEEKEND, y practica sin descanso para alcanzar su sueño. Cantó junto a Toya bajo el nombre de BAD DOGS antes de unirse a Vivids, el dúo de An y Kohane, para formar Vivid BAD SQUAD. Pese a unirse a Vivid BAD SQUAD, continúa actuando bajo el grupo BAD DOGS con Toya.
                Su padre se muestra emocionalmente negligente tanto con él como con su hermana mayor. Rara vez se menciona a su madre.',
                'personalidad' => 'Al principio, Akito parece un chico tranquilo. Sin embargo, su personalidad cambia drásticamente cuando hay música de por medio, volviéndose apasionado y temperamental hasta el punto de que la gente lo considera aterrador. Respeta a cualquiera que se muestre apasionado por lo que le interesa y odia a las personas poco comprometidas.
                Actúa de forma educada con conocidos y extraños, pero cuando está en presencia de gente con la que está más familiarizado, deja de actuar así, mostrando su verdadera personalidad brusca. Aunque Akito puede ser grosero y en ocasiones gasta bromas a Tsukasa, es una persona fiable y cariñosa.
                Cuando conoce a alguien nuevo, se muestra encantador, algo que a Toya no le gusta y a lo que se refiere como un personaje. Se le da bien mantener su fachada de cortesía y la utiliza cuando interactúa con los clientes en su lugar de trabajo.',
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
                'historia' => 'El padre de Toya era un famoso músico clásico y formó a Toya y a sus dos hermanos mayores en la música clásica desde muy pequeños, enseñándoles piano y violín. Su padre aislaba a Toya y le obligaba a estudiar música clásica a todas horas del día, lo que le hizo despreciar a su padre y, por ende, a todo lo relacionado con la música clásica. Por ello, empezó a tocar música callejera para rebelarse contra su padre y acabó conociendo a Akito un día mientras cantaba en la calle.
                Cantó con Akito bajo el nombre de BAD DOGS antes de unirse a Vivids, el dúo de An y Kohane, para formar Vivid BAD SQUAD. Pese a unirse a Vivid BAD SQUAD, sigue actuando bajo la unidad BAD DOGS con Akito.
                Es compañero de clase de Nene en el instituto Kamiyama.',
                'personalidad' => 'Toya es callado y tranquilo, pero tiene una mentalidad fuerte. Su rostro suele ser inexpresivo, y las personas que no son Akito y Tsukasa tienen dificultades para interpretar sus emociones. Cuando la gente habla con él, suelen confundirlo con una persona grosera, ya que es brusco y suele expresarse mal.
                Hasta la evolución de su carácter, no solía sonreír con frecuencia. A pesar de su actitud estoica, es amable y se apresura a ayudar a los demás. Ocasionalmente puede ser cabeza hueca o crédulo.
                Es bueno estudiando y saca buenas notas, un rasgo que comparte con Kohane. A veces puede ser estricto con Akito porque éste descuida sus estudios.',
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
                'historia' => 'De pequeño, Tsukasa era menos egocéntrico y más inseguro, preocupándose con frecuencia por su hermana Saki y su estado enfermizo. Debido a su enfermedad, tiene años de experiencia tocando "Twinkle Twinkle Little Star", y lo practicaba a menudo con la esperanza de que Saki volviera pronto a casa y jugara con él.
                Desde que Tsukasa vio de niño un espectáculo de su compañía de teatro favorita, ha soñado con convertirse en la estrella de un espectáculo mundialmente famoso y hacer sonreír al mundo. Tras fracasar en su audición para convertirse en artista del parque temático Phoenix Wonderland, Tsukasa es contratado por Emu para devolver al deteriorado Wonder Stage a su antigua gloria con increíbles actuaciones.
                Aunque no lo recuerda, Tsukasa fue motivado a convertirse en estrella por su deseo de hacer sonreír a su hermana pequeña y a sus padres. Con el paso de los años, olvidó su motivación original y la sustituyó por el objetivo más egoísta de hacerse famoso. A lo largo de la historia principal, y con la ayuda de Miku y KAITO, recuerda la verdadera razón de su pasión.',
                'personalidad' => 'Tsukasa es una persona muy segura de sí misma y carismática, que se define como una futura "estrella". Tiene un notable hábito de presumir, junto con una tendencia a dejarse llevar por el momento. También se muestra como un hermano mayor cariñoso y fiable con su hermana pequeña Saki, a menudo preocupándose y cuidando de ella.
                Desgraciadamente, a medida que crece olvida su motivación original para convertirse en una estrella, y en su lugar se deja llevar por la idea de que la gente le preste atención y se sienta impresionada por él. Su nuevo ensimismamiento le causa problemas, culpando a Nene del fracaso de su primera actuación, lo que lleva a Rui a criticarle duramente.
                Aunque es conocido por su comportamiento excéntrico y su personalidad ruidosa, Tsukasa también ha destacado por ser una persona especialmente fiable y responsable. Es trabajador y decidido, y afirma que si quiere convertirse en una "estrella", no puede relajarse. Sin embargo, también es bastante testarudo y tiene la costumbre de dar prioridad a sus responsabilidades por encima de su propio bienestar.',
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
                'historia' => 'Emu es la hija del propietario de Phoenix Wonderland, y creció viendo espectáculos en el parque. Tras ver que Tsukasa había fracasado en su audición, le contrata, junto con Nene y Rui, para devolver al descuidado Wonder Stage su antiguo esplendor.
                Emu quiere actuar en el pequeño Wonder Stage y mantenerlo vivo, ya que era el escenario favorito de su difunto abuelo. Su abuelo, a quien admira mucho, le inspiró la idea de hacer sonreír a los demás.
                Forma parte del Comité Ejecutivo del Festival Deportivo con Saki y Haruka. Es compañera de clase de  Honami en la Academia de Chicas Miyamasuzaka.',
                'personalidad' => 'Con una personalidad alegre y algo ingenua, Emu es muy impulsiva y pone en práctica todas las ideas que se le ocurren, con tendencia a involucrar en sus planes a las personas que la rodean. Emu ha creado su propio eslogan, "Wonderhoy!", que utiliza para motivarse. Lo utiliza con frecuencia, casi siempre gritándolo después de la mayoría de sus frases. Cuando está con otros, les anima y a veces les empuja a gritarlo junto a ella, posiblemente para intentar motivarles con él.
                Cuando Emu está en presencia de sus hermanos, parece bajar el tono de su personalidad optimista, volviéndose mucho más tranquila, lo que probablemente sea un efecto del desánimo de sus hermanos hacia ella. Su habitación es un reflejo de su actitud optimista, un revoltijo de colores y estampados que Emu considera que representan la felicidad.
                Aunque al principio se apresura a ignorar sus propias inseguridades en favor de intentar poner una sonrisa en todo momento, a medida que se acerca a sus compañeros de banda, empieza a sentirse más cómoda con ellos. Tras encontrar un grupo de personas que comparten su objetivo de devolver al parque su antiguo esplendor, Emu se muestra muy agradecida a sus amigos y a su apoyo.
                Al final, afirma que el grupo es una de las cosas más importantes para ella, y confía en ellos lo suficiente como para abrirse por fin sobre el impacto que ha tenido la negatividad de sus hermanos, llorando ante sus amigos mientras desahoga sus sentimientos. Emu tiene una intuición aguda cuando se trata de la sinceridad de las expresiones de una persona, aunque no parece ser plenamente consciente de ello.',
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
                'historia' => 'Nene y Rui son vecinos y amigos de la infancia. Solían hacer espectáculos juntos cuando eran niños. Le gustaría dedicarse a la actuación. Cuando era pequeña, Nene se sintió inspirada para ser actriz después de ver a una actriz mundialmente famosa interpretar a La Sirenita.
                En la secundaria, Nene se apuntó a un grupo de teatro y consiguió el papel protagonista. Ensayó con entusiasmo para no defraudar a los demás miembros. Desgraciadamente, el día de la representación se olvidó de su guión y no pudo decir nada. Este incidente le hizo perder la confianza en sí misma y, desde entonces, es incapaz de actuar sobre el escenario.
                Nene se une al grupo a petición de Rui. Es una gran cantante, pero al principio no aparece en escena. En su lugar, maneja un robot llamado NeneRobo que Rui le ha hecho y actúa a través de él. Esto se debe a su ansiedad y miedo escénico. Al principio, Tsukasa la anima a subir de nuevo al escenario. Con la ayuda de los miembros de su grupo, supera su miedo escénico y se sube sola al escenario.
                Es compañera de clase de Toya.',
                'personalidad' => 'Nene es tímida y le cuesta hablar con los demás. No obstante, es muy tajante con la gente con la que se siente cómoda. Es de lengua afilada, y una vez llamó a Tsukasa "idiota que quiere ser la mayor estrella", a Emu "chica con una energía desbordante que siempre está gritando "Wonderhoy!", y a Rui "director que tiene la mente en las nubes".
                A pesar de su carácter cortante, se preocupa mucho por sus amigos y hace todo lo posible por apoyarlos. También es muy trabajadora, y a menudo se queda hasta tarde después de los entrenamientos para ensayar sus propios papeles en los espectáculos.',
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
                'historia' => 'Rui y Nene son vecinos y amigos de la infancia. Rui fue quien la recomendó para unirse al grupo. Dirige las representaciones escénicas de los grupos y es a su vez actor y director de escena de Wonderlands x Showtime. Rui es muy hábil inventando maquinaria y crea animatrónicos para los espectáculos.
                Cuando Rui era pequeño, le encantaba crear espectáculos e intentaba incluir a sus compañeros en ellos. Sin embargo, debido a su excentricidad y a sus arriesgadas ideas, a sus compañeros no les gustaba hacer shows con él y lo rechazaban. Finalmente, Rui decidió que actuaría por su cuenta, utilizando robots como actores en lugar de personas reales. A menudo se le puede ver realizando espectáculos de guerrilla en la calle y/o en Phoenix Wonderland, lo que provoca que el personal de seguridad le persiga.
                A pesar de su carácter independiente, en el fondo Rui desea volver a actuar con otras personas. Se le da esta oportunidad cuando se une a Wonderlands x Showtime, y aprecia enormemente cómo Tsukasa está dispuesto a probar sus inventos y direcciones escénicas.',
                'personalidad' => 'Rui vive bajo sus propias reglas, lo que hace que la gente lo considere un bicho raro. Casi siempre está sonriendo y a veces se deja llevar por sus ideas excéntricas. Esto incluye utilizar a personas como maniquíes de prueba para sus ideas y someterlas a torturas en piscinas, como afirma Nene. A pesar del aparente riesgo de sus ideas, Rui hace todo lo posible por tener en cuenta la seguridad.
                Rui también tiene un nivel de curiosidad que roza la obsesión, ya que le encanta desmontar juguetes y electrodomésticos para ver cómo funcionan. Ha expresado abiertamente su deseo de desmontar los peluches del Wonderland SEKAI, a lo que Tsukasa se opone.
                Se preocupa mucho por sus amigos, como demostró cuando defendió a Emu y sus sueños de sus hermanos, así como cuando construyó a NeneRobo para ayudar a Nene con su miedo a hablar con los demás. También es una persona bromista y juguetona, y un ejemplo de ello son sus constantes ideas para actuaciones que a menudo implican poner en peligro la vida de Tsukasa.',
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
                'historia' => 'Cuando Kanade era pequeña, su madre enfermó y falleció. Su padre era músico y vivía de comisiones. El padre de Kanade reconocía su talento y decía que estaba "bendecida por la música", elogiándola a menudo por sus creaciones musicales. Un día, cuando Kanade entró en el despacho de su padre para decirle que la cena estaba lista, le vio frustrado por una canción que estaba componiendo para un concurso, insistiendo en que le faltaba algo. Ella se ofreció a ayudarle escribiéndole una parte, y él aceptó. Después de que Kanade añadiera su melodía y su padre presentara la canción, ésta acabó ganando el concurso. Sin embargo, la canción sólo tuvo éxito gracias a la contribución de Kanade, ya que su parte se incluyó en un anuncio.
                Después, su padre consiguió muchos clientes nuevos que le pidieron que creara una música similar a la del anuncio. A pesar de sus esfuerzos, no pudo igualar el estilo musical de Kanade y se sobrecargó de trabajo hasta el punto de quebrarse. El estrés psicológico le afectó gravemente a la memoria. Kanade se sintió culpable y se culpó a sí misma del estado de su padre. Durante un tiempo, pensó en morir de hambre, preguntándose si desaparecería si dejaba de comer. Sin embargo, redescubrió la vieja caja de música de su madre y se dio cuenta de que debía seguir adelante para escribir canciones que aportaran felicidad a los demás.
                Ahora Kanade compone canciones con la intención de salvar al menos a una persona y es la compositora de Nightcord at 25:00. Kanade tiene complejo de Mesías.',
                'personalidad' => 'Kanade es muy tolerante y comprensiva con sus compañeros del círculo; están agradecidos por ella y por el grupo que ha creado. Aspira a hacer felices a los demás con su música, como una vez hizo su padre. Es increíblemente trabajadora hasta el punto de no dormir y esforzarse en exceso, por lo que pone casi demasiado empeño en su trabajo. Además, Kanade insta a los demás miembros del círculo a que descansen mientras sigue esforzándose por hacer más y más canciones.
                Kanade rara vez sale de casa y pasa la mayor parte del tiempo componiendo música. Sin embargo, de vez en cuando sale para visitar a su padre en el hospital, reunirse con su grupo o comprar nuevos dispositivos electrónicos. Es más sensible a la luz solar que otras personas. Como resultado de su reclusión, Kanade tiene una condición física débil. Tampoco cuida bien de sí misma, come fideos casi siempre y tiene problemas con las tareas domésticas básicas. Carece de un horario de sueño constante y suele quedarse dormida mientras trabaja.
                Atormentada por lo que su música le hizo a su padre, como causa de su trauma, Kanade jura hacer música que salve a cualquiera. Su complejo de salvadora se hace evidente cuando siente que ha fracasado como músico si su música no sirve para ayudar a los demás. Decidida a salvar a Mafuyu con su música, jura que seguirá escribiendo, aunque su talento sea una maldición para ella.',
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
                'historia' => 'Mafuyu es una estudiante de honor y la única de su círculo que asiste regularmente a clase durante el día. Siempre saca buenas notas y es la delegada de su clase. Se dice que destaca tanto en los estudios como en los deportes; por eso, la gente suele ponerle el listón muy alto para que sobresalga en todo, cosa que ella hace sin falta. Sin embargo, en realidad se siente muy agobiada y presionada por lo que esperan de ella sus compañeros y sus padres (especialmente su madre).
                Mafuyu tenía sus propias aficiones e intereses. En secundaria, aspiraba a ser enfermera. Sin embargo, sus padres la presionaron para que fuera médico, y Mafuyu accedió, queriendo hacerles felices. A medida que Mafuyu se iba adaptando a las expectativas de sus padres y de sus compañeros, fue perdiendo el sentido de su propia identidad, convirtiéndose en la cáscara vacía de la persona que es ahora. Ya no recuerda lo que le gusta y tiene dificultades incluso para reconocer sus propias emociones.
                Sus padres, que la han empujado a hacer lo que ellos quieren y creen que es lo mejor para Mafuyu en lugar de dejarla perseguir sus propios sueños, son en gran parte culpables de su actual aflicción. Además de perder el sentido de sí misma, perdió la capacidad de saborear y disfrutar de la comida en la secundaria.
                Es miembro del club de tiro con arco con Shizuku.',
                'personalidad' => 'Mafuyu es admirada por su inteligencia, su capacidad atlética y la humilde sinceridad que muestra cuando la elogian por estos talentos. Es conocida por su amabilidad, generosidad y consideración, por sus palabras siempre educadas y por su voz suave y cálida. Es difícil, incluso imposible, hacerla enfadar, ya que cualquier vacilación que muestre que pudiera indicar desacuerdo o desagrado queda inmediatamente cubierta con una amable sonrisa. Los demás no temen confiar en ella, y a menudo tienen grandes esperanzas puestas en ella, sabiendo que ha cumplido las expectativas antes y que seguirá haciéndolo.
                Para los demás, Mafuyu es una "buena chica". Sin embargo, para sí misma y para los demás miembros de su grupo, es desapasionada y carece de emociones y empatía. Ha perdido su verdadero yo hace mucho tiempo y busca desesperadamente reencontrarse a sí misma. Bajo su fachada, la personalidad de Mafuyu es mucho más fría y contundente. Su voz es apagada y su rostro plano, ambos con pocos sentimientos. Pronuncia pocas palabras, y las que pronuncia no suelen ser más que las necesarias. Aunque no es agradable, educada ni "buena", es honesta, y sólo dentro de su fría honestidad tiene la más mínima oportunidad de mostrar sus verdaderos sentimientos. Los otros miembros de Nightcord at 25:00 reconocen esto en su voluntad de ofrecer un espacio donde ella pueda ser "rehabilitada".
                Mafuyu es una experta artista musical, como demuestra la música que produjo bajo el nombre artístico de OWN. Compuso su música por separado de los demás miembros de Nightcord en un intento de encontrarse a sí misma. La música de OWN era bastante popular, y tanto Ena como Mizuki quedaron impresionadas por ella. En comparación con las obras de Kanade, se decía que las canciones de Mafuyu eran intensamente frías y cortantes, carentes de la sensación de calidez que poseía la música de Kanade.
                A medida que Kanade y los demás miembros de Nightcord at 25:00 intentan ayudar a Mafuyu, ésta se vuelve poco a poco más receptiva. Al ver una marioneta en una exposición de muñecas, siente un intenso asco y pánico, posiblemente porque la marioneta le recordaba inconscientemente a sí misma.',
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
                'historia' => 'Ena es una aspirante a artista que conoce bien las redes sociales y es relativamente popular en Internet. Sus selfies obtienen más reconocimiento que sus ilustraciones.
                El padre de Ena es un artista famoso y su inspiración para el dibujo. Sin embargo, cree que el camino de un artista profesional está lleno de dolor y sufrimiento, y piensa que Ena es incapaz de manejar ese dolor. Un día, cuando Ena estaba en la secundaria, expresó su deseo de asistir a la escuela de arte, pero su padre le dijo que no se molestara porque carecía de talento. Desde entonces, su relación ha sido tensa.
                Su ansia de atención comenzó cuando su profesor de arte en la escuela secundaria afirmó que uno de sus cuadros solo era " aceptable". Los días siguientes, Ena trabajó duro en su siguiente obra con la esperanza de recibir elogios del severo hombre, sólo para que éste le dijera que se estaba esforzando demasiado y procediera a llenar de elogios el trabajo de los demás alumnos. Ena no sabía cómo se sentía ni qué podía decir.',
                'personalidad' => 'Ena es una chica de carácter fuerte. Cuando dibuja, está completamente absorta en su trabajo y hace caso omiso de todo lo que la rodea. Según observan sus compañeras, se olvida de apagar el micrófono, y éstas la oyen murmurar varios comentarios sobre sus ilustraciones, sobre todo acerca de que no son lo que ella pretende. Debido al desprecio de su padre hacia ella y su arte, ha crecido en ella la envidia hacia quienes considera que tienen talento y se amarga cuando esas personas lo desechan. En el fondo, ella misma cree que no tiene talento. Además, anhela la atención y los elogios por su arte, lo que la lleva por el camino del perfeccionismo. Se pone nerviosa cuando sus compañeros la felicitan y se enfada cuando hacen lo contrario.
                Mizuki también la describe como "tsundere". Aunque no suele ser fría, a veces duda cuando sus amigos le sugieren ideas que no le gustan. También puede ser algo brusca y sarcástica con ellos. Sin embargo, también tiene un lado cariñoso y suave. Se preocupa por la salud de Kanade e intenta ayudar a Mafuyu a recuperar su identidad perdida.
                Ena quiere ser el centro de atención, ya que en cierto modo la reconforta y la hace feliz. Le gusta hacerse selfies y colgarlos en Internet, y está muy orgullosa de ellos. A veces se la ve haciéndose un selfie cuando está deprimida y colgándolo en Internet. Luego se anima por los cumplidos y alabanzas de los comentarios que ve.',
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
                'historia' => 'Mizuki trabaja en animación y realización de vídeos y cuelga sus MV en Internet. La música de Yoisaki Kanade le cautivó al escucharla. Kanade vio el MV que hizo Mizuki y le invitó al círculo.
                Desde el instituto, los demás marginan a Mizuki por vestirse y actuar de forma peculiar. Mizuki expresa su confusión por las críticas, ya que no ve nada malo en querer vestirse de forma linda. No asiste a la escuela con regularidad debido a la atención negativa de sus compañeros.
                Mizuki está en la misma clase que An. Mizuki tiene una hermana mayor que vive en el extranjero.',
                'personalidad' => 'Mizuki es una persona temperamental, y Kanade cree que sólo actúa según sus propios intereses. Suele frustrarse y enfadarse cuando se le ridiculiza, y tiene un fuerte deseo de expresarse libremente, sin contenerse ni ser objeto de burla. Tiene una obsesión por las cosas lindas, y lo expresa a través de su moda artesanal. A pesar de su comportamiento enérgico, despreocupado y a veces infantil, Mizuki se muestra a menudo como siendo la persona más madura de Nightcord at 25:00, como la propia Ena admite. A menudo asume el papel de mediadora en las discusiones, separando las diferencias entre ambas.
                Mizuki es una persona bastante introspectiva, por lo que suele ser quien que sugiere descansos cuando nota que sus compañeros están cansadas o especialmente estresados. Mientras que Kanade tiende a centrarse en una tarea determinada, Mizuki mantiene su atención al menos un poco anclada en la realidad, capaz de percibir los cambios de tensión y ambiente en el grupo. Es capaz de llegar a conclusiones bastante matizadas sobre los problemas, así como sobre las personas, como resulta evidente en la forma en que hablaron de sus sentimientos hacia la desaparición de Mafuyu; explicando sus emociones pero reconociendo que no es su responsabilidad responder a los sentimientos de Mizuki o sentirse salvada por ellos.
                Para bien o para mal, tienen un fuerte sentido de los límites: cuándo involucrarse en los asuntos de los demás y cuándo involucrar a los demás en sus propios asuntos. Reconoce que debe comprender las preocupaciones de los demás antes de dar su opinión.
                Parece que se mantiene en secreto, hasta cierto punto, porque entiende que todo el mundo tiene cosas que quiere mantener ocultas.',
                'imagen' => 'img/personajes/img-mizuki.png',
                'chibi' => 'img/personajes/chibi-mizuki.png',
                'icon' => 'img/personajes/icon-mizuki.png',
                'stamp' => 'img/personajes/stamp-mizuki.png',
                'sticker' => 'img/personajes/sticker-mizuki.png',
                'comic' => 'img/personajes/comic-mizuki.png',
            ],
        ];

        foreach ($personajes as $pj) {
            Personaje::updateOrCreate(['nombre' => $pj['nombre']], $pj);
        }
    }
}
