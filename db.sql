--
-- PostgreSQL database dump
--

-- Dumped from database version 13.9 (Debian 13.9-0+deb11u1)
-- Dumped by pg_dump version 13.9 (Debian 13.9-0+deb11u1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'SQL_ASCII';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: pgcrypto; Type: EXTENSION; Schema: -; Owner: -
--

CREATE EXTENSION IF NOT EXISTS pgcrypto WITH SCHEMA public;


--
-- Name: EXTENSION pgcrypto; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION pgcrypto IS 'cryptographic functions';


SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: cartas; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.cartas (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    rareza integer NOT NULL,
    atributo character varying(255) NOT NULL,
    unidolized text NOT NULL,
    idolized text NOT NULL,
    pj_id integer NOT NULL
);


ALTER TABLE public.cartas OWNER TO pro;

--
-- Name: cartas_id_seq; Type: SEQUENCE; Schema: public; Owner: pro
--

CREATE SEQUENCE public.cartas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cartas_id_seq OWNER TO pro;

--
-- Name: cartas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pro
--

ALTER SEQUENCE public.cartas_id_seq OWNED BY public.cartas.id;


--
-- Name: eventos; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.eventos (
    id bigint NOT NULL,
    titulo character varying(255) NOT NULL,
    banner text NOT NULL,
    fecha_inicio timestamp(0) without time zone NOT NULL,
    fecha_fin timestamp(0) without time zone NOT NULL
);


ALTER TABLE public.eventos OWNER TO pro;

--
-- Name: eventos_id_seq; Type: SEQUENCE; Schema: public; Owner: pro
--

CREATE SEQUENCE public.eventos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.eventos_id_seq OWNER TO pro;

--
-- Name: eventos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pro
--

ALTER SEQUENCE public.eventos_id_seq OWNED BY public.eventos.id;


--
-- Name: failed_jobs; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);


ALTER TABLE public.failed_jobs OWNER TO pro;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: pro
--

CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.failed_jobs_id_seq OWNER TO pro;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pro
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- Name: grupos; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.grupos (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    logo text NOT NULL,
    imagen text NOT NULL,
    historia text NOT NULL
);


ALTER TABLE public.grupos OWNER TO pro;

--
-- Name: grupos_id_seq; Type: SEQUENCE; Schema: public; Owner: pro
--

CREATE SEQUENCE public.grupos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.grupos_id_seq OWNER TO pro;

--
-- Name: grupos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pro
--

ALTER SEQUENCE public.grupos_id_seq OWNED BY public.grupos.id;


--
-- Name: inventario; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.inventario (
    user_id integer NOT NULL,
    carta_id integer NOT NULL,
    estado character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT inventario_estado_check CHECK (((estado)::text = ANY ((ARRAY['coleccion'::character varying, 'deseo'::character varying])::text[])))
);


ALTER TABLE public.inventario OWNER TO pro;

--
-- Name: migrations; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO pro;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: pro
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO pro;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pro
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO pro;

--
-- Name: personajes; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.personajes (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    grupo_id integer NOT NULL,
    historia text NOT NULL,
    personalidad text NOT NULL,
    imagen text NOT NULL,
    chibi text NOT NULL,
    icon text NOT NULL,
    stamp text NOT NULL,
    sticker text NOT NULL,
    comic text NOT NULL
);


ALTER TABLE public.personajes OWNER TO pro;

--
-- Name: personajes_id_seq; Type: SEQUENCE; Schema: public; Owner: pro
--

CREATE SEQUENCE public.personajes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.personajes_id_seq OWNER TO pro;

--
-- Name: personajes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pro
--

ALTER SEQUENCE public.personajes_id_seq OWNED BY public.personajes.id;


--
-- Name: personal_access_tokens; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.personal_access_tokens OWNER TO pro;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE; Schema: public; Owner: pro
--

CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.personal_access_tokens_id_seq OWNER TO pro;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pro
--

ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;


--
-- Name: posts; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.posts (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    contenido text NOT NULL,
    user_id integer NOT NULL
);


ALTER TABLE public.posts OWNER TO pro;

--
-- Name: posts_id_seq; Type: SEQUENCE; Schema: public; Owner: pro
--

CREATE SEQUENCE public.posts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.posts_id_seq OWNER TO pro;

--
-- Name: posts_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pro
--

ALTER SEQUENCE public.posts_id_seq OWNED BY public.posts.id;


--
-- Name: preguntas; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.preguntas (
    id bigint NOT NULL,
    pregunta text NOT NULL
);


ALTER TABLE public.preguntas OWNER TO pro;

--
-- Name: preguntas_id_seq; Type: SEQUENCE; Schema: public; Owner: pro
--

CREATE SEQUENCE public.preguntas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.preguntas_id_seq OWNER TO pro;

--
-- Name: preguntas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pro
--

ALTER SEQUENCE public.preguntas_id_seq OWNED BY public.preguntas.id;


--
-- Name: relaciones; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.relaciones (
    id bigint NOT NULL,
    pj1_id integer NOT NULL,
    pj2_id integer NOT NULL,
    descripcion text NOT NULL,
    CONSTRAINT relaciones_unicas CHECK ((pj1_id < pj2_id))
);


ALTER TABLE public.relaciones OWNER TO pro;

--
-- Name: relaciones_id_seq; Type: SEQUENCE; Schema: public; Owner: pro
--

CREATE SEQUENCE public.relaciones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.relaciones_id_seq OWNER TO pro;

--
-- Name: relaciones_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pro
--

ALTER SEQUENCE public.relaciones_id_seq OWNED BY public.relaciones.id;


--
-- Name: respuestas; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.respuestas (
    id bigint NOT NULL,
    respuesta text NOT NULL,
    pj_id integer NOT NULL,
    pregunta_id integer NOT NULL
);


ALTER TABLE public.respuestas OWNER TO pro;

--
-- Name: respuestas_id_seq; Type: SEQUENCE; Schema: public; Owner: pro
--

CREATE SEQUENCE public.respuestas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.respuestas_id_seq OWNER TO pro;

--
-- Name: respuestas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pro
--

ALTER SEQUENCE public.respuestas_id_seq OWNED BY public.respuestas.id;


--
-- Name: trivia; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.trivia (
    id bigint NOT NULL,
    dato text NOT NULL,
    pj_id integer NOT NULL
);


ALTER TABLE public.trivia OWNER TO pro;

--
-- Name: trivia_id_seq; Type: SEQUENCE; Schema: public; Owner: pro
--

CREATE SEQUENCE public.trivia_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.trivia_id_seq OWNER TO pro;

--
-- Name: trivia_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pro
--

ALTER SEQUENCE public.trivia_id_seq OWNED BY public.trivia.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    admin boolean DEFAULT false NOT NULL,
    valido boolean DEFAULT false NOT NULL,
    avatar text,
    biografia character varying(300),
    cumple timestamp(0) without time zone,
    twitter character varying(255),
    discord character varying(255),
    grupo_fav_id integer,
    pj_fav_id integer
);


ALTER TABLE public.users OWNER TO pro;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: pro
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO pro;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pro
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: valoraciones; Type: TABLE; Schema: public; Owner: pro
--

CREATE TABLE public.valoraciones (
    post_id integer NOT NULL,
    user_id integer NOT NULL
);


ALTER TABLE public.valoraciones OWNER TO pro;

--
-- Name: cartas id; Type: DEFAULT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.cartas ALTER COLUMN id SET DEFAULT nextval('public.cartas_id_seq'::regclass);


--
-- Name: eventos id; Type: DEFAULT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.eventos ALTER COLUMN id SET DEFAULT nextval('public.eventos_id_seq'::regclass);


--
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- Name: grupos id; Type: DEFAULT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.grupos ALTER COLUMN id SET DEFAULT nextval('public.grupos_id_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: personajes id; Type: DEFAULT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.personajes ALTER COLUMN id SET DEFAULT nextval('public.personajes_id_seq'::regclass);


--
-- Name: personal_access_tokens id; Type: DEFAULT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);


--
-- Name: posts id; Type: DEFAULT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.posts ALTER COLUMN id SET DEFAULT nextval('public.posts_id_seq'::regclass);


--
-- Name: preguntas id; Type: DEFAULT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.preguntas ALTER COLUMN id SET DEFAULT nextval('public.preguntas_id_seq'::regclass);


--
-- Name: relaciones id; Type: DEFAULT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.relaciones ALTER COLUMN id SET DEFAULT nextval('public.relaciones_id_seq'::regclass);


--
-- Name: respuestas id; Type: DEFAULT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.respuestas ALTER COLUMN id SET DEFAULT nextval('public.respuestas_id_seq'::regclass);


--
-- Name: trivia id; Type: DEFAULT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.trivia ALTER COLUMN id SET DEFAULT nextval('public.trivia_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: cartas; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.cartas (id, nombre, rareza, atributo, unidolized, idolized, pj_id) FROM stdin;
1	Distant-Looking, but Friendly	1	cool	img/cartas/1_1.png	img/cartas/1_1.png	1
2	Leo/need	2	happy	img/cartas/2_1.png	img/cartas/2_1.png	1
3	What Lies Beyond	3	mysterious	img/cartas/3_1.png	img/cartas/3_2.png	1
4	A Chat Before Dawn	4	cute	img/cartas/4_1.png	img/cartas/4_2.png	1
\.


--
-- Data for Name: eventos; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.eventos (id, titulo, banner, fecha_inicio, fecha_fin) FROM stdin;
\.


--
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- Data for Name: grupos; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.grupos (id, nombre, logo, imagen, historia) FROM stdin;
2	MORE MORE JUMP!	img/grupos/logo-mmj.png	img/grupos/img-mmj.png	Minori soñaba con convertirse en idol desde que vio a Haruka en la televisión. Después de que Haruka dejara de ser idol, se hicieron amigas. Minori y los Virtual Singers convencerán a Haruka de volver a ser idol y formar así MORE MORE JUMP! junto a Airi y Shizuku.\r\n\r\nDurante los ensayos, el grupo descubre una canción llamada "Untitled" en sus teléfonos. Al tocarla, son transportadas al SEKAI. Allí conocen a Miku y Rin, que actúan como idols en el Stage SEKAI.
3	Vivid BAD SQUAD	img/grupos/logo-vbs.png	img/grupos/img-vbs.png	Kohane se encuentra a An y su banda en el Weekend Garage, pero huye por timidez. Al volver una semana después, An la invita a cantar y, al darse cuenta de su potencial, la invita a formar una banda: Vivids. Allí conocen a BAD DOGS, Akito y Toya. Akito las invita a un evento y, mientras creaban la lista de reproducción, Kohane descubre una canción llamada "Untitled" en su teléfono.\r\n\r\nAl descargarla, An y Kohane son transportadas al SEKAI, donde Miku y MEIKO les dan la bienvenida, conociendo también a Rin y Len. Inicialmente compuesto por dos grupos competidores, sus experiencias en el SEKAI unen a los cuatro para alcanzar un nuevo nivel de talento musical como grupo de estilo musical callejero.
4	Wonderlands x Showtime	img/grupos/logo-wxs.png	img/grupos/img-wxs.png	Tras fracasar en su audición, Tsukasa es contratado por Emu para devolver al Phoenix Wonderland Stage a su antigua gloria con increíbles actuaciones. Ambos actores reclutan al director de escena y experto en robótica Rui y a la tímida cantante Nene, junto con su robot réplica, Nene-Robo.\r\n\r\nMientras Emu intenta convencer a Tsukasa de unirse a la compañía Phoenix Wonderland, Tsukasa descubre una canción llamada "Untitled" en su teléfono. Al reproducirla, ambos son transportados al SEKAI, donde conocerán a Miku, KAITO y los peluches con los que actúan.
5	Nightcord at 25:00	img/grupos/logo-n25.png	img/grupos/img-n25.png	El círculo fue creado por K con la esperanza de hacer música que "salve a la gente" y les dé esperanza. Recluta a Enanan, Amia y Yuki, comunicándose a través de un chat llamado Nightcord. Inicialmente, los miembros desconocían los nombres reales o apariencias de los demás, excepto Ena, que sube selfies a Internet, aunque sólo las ve Mizuki.\r\n\r\nUn día, Kanade pierde el contacto con uno de los miembros de su círculo. Encuentran un archivo de una canción llamada "Untitled" que es compartida con cada uno de ellos y, al reproducirla, son transportados al Empty SEKAI.
1	Leo/need	img/grupos/logo-ln.png	img/grupos/img-ln.png	Las integrantes de Leo/need eran amigas de la infancia y tocaban música juntas. Sin embargo, su relación se torció tras cierto incidente en el colegio. Cuando Saki vuelve durante el instituto, la banda se reforma con la ayuda de los Virtual Singers.\r\n\r\n                Un día, Ichika descubre una canción llamada "Untitled" en su teléfono. Allí conoce a Miku y Luka, que le dan la bienvenida al SEKAI y la invitan a tocar con ellas con el objetivo de reunir a la banda de nuevo y ayudar a las chicas a encontrar sus verdaderos sentimientos.
\.


--
-- Data for Name: inventario; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.inventario (user_id, carta_id, estado, created_at, updated_at) FROM stdin;
5	2	deseo	2023-05-13 16:39:16	2023-05-13 16:39:16
5	1	coleccion	2023-05-21 18:03:45	2023-05-21 18:03:45
5	3	coleccion	2023-05-24 15:31:53	2023-05-24 15:31:53
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.migrations (id, migration, batch) FROM stdin;
1	2014_10_12_100000_create_password_resets_table	1
2	2019_08_19_000000_create_failed_jobs_table	1
3	2019_12_14_000001_create_personal_access_tokens_table	1
4	2023_04_16_135900_create_grupos_table	1
5	2023_04_16_142629_create_personajes_table	1
6	2023_04_16_170000_create_users_table	1
7	2023_04_16_183856_create_cartas_table	1
8	2023_04_16_185319_create_eventos_table	1
9	2023_04_16_185601_create_preguntas_table	1
10	2023_04_16_185737_create_respuestas_table	1
11	2023_04_16_190154_create_trivia_table	1
12	2023_04_16_190359_create_posts_table	1
14	2023_04_16_190808_create_inventario_table	1
15	2023_04_16_191037_create_relaciones_table	1
16	2023_04_26_193130_add_relaciones_unicas_constraint	1
17	2023_05_13_145109_add_inventario_unique_constraint	2
18	2023_05_15_192222_add_valoraciones_unique_constraint	3
19	2023_04_16_190505_create_valoraciones_table	4
20	2023_05_23_171550_update_users_personajes_fk	5
\.


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: personajes; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.personajes (id, nombre, grupo_id, historia, personalidad, imagen, chibi, icon, stamp, sticker, comic) FROM stdin;
1	Ichika Hoshino	1	Desde pequeña, Ichika adoraba a Miku y sus canciones. Ichika solía cantar canciones de Miku mientras tocaba la guitarra que le dio su padre.\n                Ichika, Saki, Honami y Shiho eran amigas desde niñas. El grupo solía contemplar las estrellas y tocar música, pero después de que Saki fuera hospitalizada durante el colegio, las relaciones de Ichika con Honami y Shiho se torcieron. Aun así, Ichika intentó comunicarse con ambas, pero no obtuvo mucha respuesta.\n                Después del regreso de Saki a la escuela y tras entrar al School SEKAI, el grupo se reúne poco a poco y forma Leo/need, llamada así por la lluvia de meteoritos que vieron juntas de pequeñas.\n                Es compañera de clase de Saki y Haruka.	Aunque a primera vista parece estoica, Ichika es una chica tranquila, modesta y amable que siempre piensa en sus amigos. Se le da bien elogiar a los demás. Según Honami, no siempre se comunica muy bien.\n                Al principio Ichika se mostraba apática y era incapaz de armarse de valor para reunir a sus amigas de la infancia, preguntándose si todo seguiría igual. Tras descubrir el School SEKAI, Ichika se vuelve más valiente, feliz y apasionada por la música.\n                Le encantan las canciones de Miku, siempre las escucha cuando está aburrida y las usa de referencia.	img/personajes/img-ichika.png	img/personajes/chibi-ichika.png	img/personajes/icon-ichika.png	img/personajes/stamp-ichika.png	img/personajes/sticker-ichika.png	img/personajes/comic-ichika.png
3	Honami Mochizuki	1	Honami, Ichika, Saki y Shiho eran amigas de la infancia. El grupo solía contemplar las estrellas y tocar música juntas, pero debido a la hospitalización de Saki durante la secundaria, las relaciones de Honami con Ichika y Shiho se torcieron.\n                A pesar de querer ser amiga de las dos, dejó de hablarles después de que sus compañeros de clase la llamaran desleal y hablaran mal de Ichika y Shiho. Tras el regreso de Saki, el grupo se reúne poco a poco y forma Leo/need.\n                Es estudiante de honor y compañera de clase de Emu. Forma parte del Comité de Embellecimiento junto a Shizuku.	Honami es inteligente, atlética y amable. Es amable con todo el mundo y siempre tiene en cuenta sus sentimientos. Sin embargo, esto puede llevarla a ser indecisa, y tiene dificultades para expresar sus propios sentimientos, preocupándose de que la gente no la quiera por ello. No quiere que los demás se preocupen por ella y tiende a emocionarse con facilidad.\n                A pesar de ello, siempre apoya a sus amigos y piensa en ellos muy a menudo; la moraleja de su personaje es "...cuando intentas estar del lado de todos, acabas por no estar del lado de nadie..." y que hay más de una forma de bondad.\n                Cuando estaba en la secundaria, la gente solía confiar en ella, pero debido a la creencia de que sólo intentaba estar del lado de los demás y que tenía dos caras, poco a poco se fue aislando de sus compañeros. Tras unirse a Leo/need, decide cambiar para mejor y expresar sus verdaderos sentimientos.	img/personajes/img-honami.png	img/personajes/chibi-honami.png	img/personajes/icon-honami.png	img/personajes/stamp-honami.png	img/personajes/sticker-honami.png	img/personajes/comic-honami.png
7	Airi Momoi	2	Airi quería ser una idol cuando era pequeña, ya que admiraba la forma en que bailaban, cantaban y hacían sonreír a la gente, y ella quería conseguir hacer lo mismo. También quería ser más femenina, ya que era consciente de que era una tomboy.\n                Más tarde, Airi debutó como miembro del grupo de idols QT. Fue una idol popular que apareció en muchos "variety shows". Uno de sus personajes televisivos más conocidos fue The Masked Variety Idol, Happy Everyday. Debido a su talento en la televisión, su agencia la instó a que dejara de ser idol y se convirtiera en una personalidad del mundo de la televisión. Al escuchar a su representante decir que Airi era una idol mediocre, rechazó la oferta y abandonó el grupo.\n                Airi aparentemente renunció a su sueño de ser una idol. Incluso insultó a Minori cuando se conocieron y le dijo que no tenía ninguna posibilidad de convertirse en idol. Sin embargo, al ver el espíritu de Minori, se sintió revigorizada por su determinación de alcanzar su sueño, aceptando así entrenar a Minori y crear MORE MORE JUMP! con Haruka y la antigua rival de Airi, Shizuku.	Airi tiene una mentalidad fuerte y a veces puede parecer prepotente. Según Minori, es estricta pero fiable. Es muy protectora con sus amigos y su familia, y odia a los bullies. De niña era más masculina, aunque su madre la reprimía con frecuencia. A día de hoy, Airi aún conserva parte de su actitud testaruda.\n                Antes de unirse a su grupo, solía recordar su pasado, amargada por el hecho de que las industrias a las que acudía intentaran utilizarla como personalidad televisiva y dejaran de lado por completo sus actividades como idol. Cuando hacía esto, se volvía brusca e irracional con los que la confrontaban por su actitud, insultándolos, para sentirse culpable después.\n                Aunque parezca descarada, Airi se preocupa mucho tanto por sus amigos como por sus hermanos, y adopta un papel de hermana con ambos.	img/personajes/img-airi.png	img/personajes/chibi-airi.png	img/personajes/icon-airi.png	img/personajes/stamp-airi.png	img/personajes/sticker-airi.png	img/personajes/comic-airi.png
13	Tsukasa Tenma	4	De pequeño, Tsukasa era menos egocéntrico y más inseguro, preocupándose con frecuencia por su hermana Saki y su estado enfermizo. Debido a su enfermedad, tiene años de experiencia tocando "Twinkle Twinkle Little Star", y lo practicaba a menudo con la esperanza de que Saki volviera pronto a casa y jugara con él.\n                Desde que Tsukasa vio de niño un espectáculo de su compañía de teatro favorita, ha soñado con convertirse en la estrella de un espectáculo mundialmente famoso y hacer sonreír al mundo. Tras fracasar en su audición para convertirse en artista del parque temático Phoenix Wonderland, Tsukasa es contratado por Emu para devolver al deteriorado Wonder Stage a su antigua gloria con increíbles actuaciones.\n                Aunque no lo recuerda, Tsukasa fue motivado a convertirse en estrella por su deseo de hacer sonreír a su hermana pequeña y a sus padres. Con el paso de los años, olvidó su motivación original y la sustituyó por el objetivo más egoísta de hacerse famoso. A lo largo de la historia principal, y con la ayuda de Miku y KAITO, recuerda la verdadera razón de su pasión.	Tsukasa es una persona muy segura de sí misma y carismática, que se define como una futura "estrella". Tiene un notable hábito de presumir, junto con una tendencia a dejarse llevar por el momento. También se muestra como un hermano mayor cariñoso y fiable con su hermana pequeña Saki, a menudo preocupándose y cuidando de ella.\n                Desgraciadamente, a medida que crece olvida su motivación original para convertirse en una estrella, y en su lugar se deja llevar por la idea de que la gente le preste atención y se sienta impresionada por él. Su nuevo ensimismamiento le causa problemas, culpando a Nene del fracaso de su primera actuación, lo que lleva a Rui a criticarle duramente.\n                Aunque es conocido por su comportamiento excéntrico y su personalidad ruidosa, Tsukasa también ha destacado por ser una persona especialmente fiable y responsable. Es trabajador y decidido, y afirma que si quiere convertirse en una "estrella", no puede relajarse. Sin embargo, también es bastante testarudo y tiene la costumbre de dar prioridad a sus responsabilidades por encima de su propio bienestar.	img/personajes/img-tsukasa.png	img/personajes/chibi-tsukasa.png	img/personajes/icon-tsukasa.png	img/personajes/stamp-tsukasa.png	img/personajes/sticker-tsukasa.png	img/personajes/comic-tsukasa.png
19	Ena Shinonome	5	Ena es una aspirante a artista que conoce bien las redes sociales y es relativamente popular en Internet. Sus selfies obtienen más reconocimiento que sus ilustraciones.\n                El padre de Ena es un artista famoso y su inspiración para el dibujo. Sin embargo, cree que el camino de un artista profesional está lleno de dolor y sufrimiento, y piensa que Ena es incapaz de manejar ese dolor. Un día, cuando Ena estaba en la secundaria, expresó su deseo de asistir a la escuela de arte, pero su padre le dijo que no se molestara porque carecía de talento. Desde entonces, su relación ha sido tensa.\n                Su ansia de atención comenzó cuando su profesor de arte en la escuela secundaria afirmó que uno de sus cuadros solo era " aceptable". Los días siguientes, Ena trabajó duro en su siguiente obra con la esperanza de recibir elogios del severo hombre, sólo para que éste le dijera que se estaba esforzando demasiado y procediera a llenar de elogios el trabajo de los demás alumnos. Ena no sabía cómo se sentía ni qué podía decir.	Ena es una chica de carácter fuerte. Cuando dibuja, está completamente absorta en su trabajo y hace caso omiso de todo lo que la rodea. Según observan sus compañeras, se olvida de apagar el micrófono, y éstas la oyen murmurar varios comentarios sobre sus ilustraciones, sobre todo acerca de que no son lo que ella pretende. Debido al desprecio de su padre hacia ella y su arte, ha crecido en ella la envidia hacia quienes considera que tienen talento y se amarga cuando esas personas lo desechan. En el fondo, ella misma cree que no tiene talento. Además, anhela la atención y los elogios por su arte, lo que la lleva por el camino del perfeccionismo. Se pone nerviosa cuando sus compañeros la felicitan y se enfada cuando hacen lo contrario.\n                Mizuki también la describe como "tsundere". Aunque no suele ser fría, a veces duda cuando sus amigos le sugieren ideas que no le gustan. También puede ser algo brusca y sarcástica con ellos. Sin embargo, también tiene un lado cariñoso y suave. Se preocupa por la salud de Kanade e intenta ayudar a Mafuyu a recuperar su identidad perdida.\n                Ena quiere ser el centro de atención, ya que en cierto modo la reconforta y la hace feliz. Le gusta hacerse selfies y colgarlos en Internet, y está muy orgullosa de ellos. A veces se la ve haciéndose un selfie cuando está deprimida y colgándolo en Internet. Luego se anima por los cumplidos y alabanzas de los comentarios que ve.	img/personajes/img-ena.png	img/personajes/chibi-ena.png	img/personajes/icon-ena.png	img/personajes/stamp-ena.png	img/personajes/sticker-ena.png	img/personajes/comic-ena.png
2	Saki Tenma	1	Nacida con un cuerpo débil, Saki estuvo hospitalizada durante toda la secundaria. Su hermano mayor, Tsukasa, cuidó de ella durante ese tiempo hasta que está lo suficientemente sana para volver a la escuela. Saki está decidida a disfrutar de su juventud y experimentar todo lo que no pudo hacer en el hospital. Debido a esta presión, a veces trabaja demasiado y cae enferma.\n                Saki era amiga de la infancia de Ichika, Honami y Shiho. Sin embargo, perdió el contacto con ellas en secundaria, excepto con Ichika, que la visitaba en el hospital. Al volver al instituto, se sorprende al ver que el grupo se ha distanciado. Con la ayuda de Ichika, Miku y Luka, consiguen reunir el grupo y volver a tocar con ellas.\n                Forma parte del Comité Ejecutivo del Festival Deportivo junto con Haruka y Emu. Es compañera de clase de Ichika y Haruka.	Saki es una persona alegre y de buen humor que se esfuerza por no dejar nunca de sonreír. Le gusta la moda y es aficionada a los estilos y la subcultura gyaru.\n                De pequeña, Saki solía faltar al colegio debido a su condición enfermiza, al punto de ser educada en casa por un tiempo. Durante sus años de aislamiento, Saki solía sentirse sola y triste, a veces sin ser capaz de sonreír a pesar de los esfuerzo de su hermano. Está decidida a vivir al máximo, aunque a veces puede ignorar sus límites y descuidar su salud.\n                A Saki y a su hermano les encantan los parques temáticos y sus atracciones. A veces arrastra a sus compañeros al Phoenix Wondeland, para disgusto de ellos.	img/personajes/img-saki.png	img/personajes/chibi-saki.png	img/personajes/icon-saki.png	img/personajes/stamp-saki.png	img/personajes/sticker-saki.png	img/personajes/comic-saki.png
4	Shiho Hinomori	1	Shiho, Ichika, Saki y Honami eran amigas desde pequeñas. El grupo solía contemplar las estrellas y tocar música, pero debido a la hospitalización de Saki durante la secundaria, las relaciones de Shiho con Ichika y Honami se torcieron. Otras personas intentaron entablar amistad con Shiho, pero ella no mostró ningún interés por ellas, lo que le acarreó una mala reputación.\n                A causa de los rumores sobre ella, hizo que Ichika y Honami dejaran de hablarle, por miedo a provocar que se hundieran con ella. Después de que Saki volviera a la escuela y accedieran al School SEKAI, el grupo se reunió poco a poco y formaron Leo/need, llamada así por la lluvia de meteoritos que vieron juntas cuando eran niñas.\n                Cuando ella mencionó su falta de habilidad, el grupo se vio envuelto en una discusión, lo que provocó su separación y la mala reputación de Shiho.\n                Es compañera de clase de Minori y Kohane.	Shiho es introvertida y no le gusta relacionarse con los demás. Se refugia en sus aficiones y no le importa lo que los demás piensen de ella. Aunque es poco abierta, no es antipática y suele estar dispuesta a ayudar a los demás. Es directa y habla sin rodeos. Su actitud fría y distante se debe a su miedo a herir y hundir a los que la rodean.\n                Debido a su carácter distante, se han extendido rumores sobre ella por toda la escuela, la mayoría de los cuales afirmaban que era una matona, que a menudo tramaba algo. Aunque Shiho se preocupa mucho por sus amigos de la infancia, no tiene reparos en ser dura con ellos cuando lo considera necesario. No suele hacer cumplidos y, cuando los hace, suelen ser breves y francos.\n                Se toma muy en serio los ensayos de la banda, y a menudo lidera el grupo porque es la que tiene más experiencia. Shiho aspira dedicarse profesionalmente a la música en el futuro.	img/personajes/img-shiho.png	img/personajes/chibi-shiho.png	img/personajes/icon-shiho.png	img/personajes/stamp-shiho.png	img/personajes/sticker-shiho.png	img/personajes/comic-shiho.png
5	Minori Hanasato	2	Cuando Minori era pequeña, solía tener mala suerte. Un día, cuando se le cayó el testigo en una carrera de relevos en el colegio, Minori se quedó en casa porque se sentía culpable y temía que sus compañeros se enfadaran con ella. Entonces vio a Haruka, de ASRUN, cantando en solitario en la televisión. Las palabras de Haruka de que "mañana siempre será un día mejor" animaron a Minori, y desde entonces es fan de Haruka.\n                Al igual que su eterna inspiración, Minori también se ha propuesto convertirse en idol. Se ha presentado a más de 50 audiciones, pero ha fracasado en todas. A pesar de ello, nunca se rinde y sigue intentándolo para alcanzar su sueño. Mientras practica en el tejado de su escuela, conoce a Haruka, quien, junto con Airi y Shizuku, la ayuda a entrenarse para convertirse en una idol hecha y derecha. Gracias a su carácter positivo y trabajador, Minori inspira esperanza a las demás ex idols y todas acaban formando juntas MORE MORE JUMP!\n                Es compañera de Shiho y Kohane. Forma parte del Comité de Cuidado de Animales con Kohane.	Minori es una chica optimista y trabajadora que ha demostrado su determinación y dedicación para convertirse en idol, algo por lo que los demás suelen felicitarla. Tiene un corazón bondadoso e intenta ser considerada con los demás.\n                Sin embargo, también es torpe, tiende a asustarse con facilidad y a menudo tiene problemas para mantener la compostura. A esto se une su costumbre de decir lo que se le pasa por la cabeza, y parece que le resulta fácil expresar sus emociones sin control, a propósito o no.\n                Admira a muchos de sus amigos y compañeros y aspira a ser como ellos. A medida que crece como persona y como futura idol, desea alcanzar la felicidad que Haruka solía sentir como idol antes de retirarse. Aunque no lo parezca al conocerla, es una joven empática y emocionalmente madura. Tiene la costumbre de repetir la frase "más y más".	img/personajes/img-minori.png	img/personajes/chibi-minori.png	img/personajes/icon-minori.png	img/personajes/stamp-minori.png	img/personajes/sticker-minori.png	img/personajes/comic-minori.png
6	Haruka Kiritani	2	Haruka formaba parte del grupo de idols ASRUN, aclamado en todo el país, y era la más popular de todos los miembros del grupo. Tras una discusión con uno de los miembros de su grupo, se retiró como idol y se convirtió en una estudiante normal de la Academia de Chicas Miyamasuzaka. Poco después de retirarse, conoce a Minori en la azotea buscando un lugar para leer. Poco después, Minori, Airi y Shizuku la invitan a crear MORE MORE JUMP! con ellas. Al principio se niega, hasta que Mai, antigua miembro de ASRUN, le da ánimos.\n                Haruka ama profundamente ser una idol y disfruta especialmente de la visión del escenario cuando los penlights del público se vuelven azules, en apoyo a ella. Le motivaba mucho dar esperanza a sus fans. Durante el declive de Mai, Haruka le aconsejó que siguiera trabajando duro. Por desgracia, Mai se esforzó demasiado y acabó lesionándose las cuerdas vocales. Después de que Mai se enfadara con Haruka y la llamara mentirosa por su frustración, Haruka empezó a verse a sí misma incapaz de ser una idol. Con el tiempo, la culpa se manifestó como un bloqueo psicológico que la incapacitaba para subirse al escenario, ya que le temblaban las piernas sin control. Haruka no tardó en renunciar a la idea de ser una idol.\n                Después, Haruka se volvió más melancólica, aceptando que simplemente así serían las cosas. Sin embargo, después de que Minori, Airi y Shizuku realizaran un espectáculo para ella en el Stage SEKAI y le enseñaran la escena de los penlights azules una vez más, se dio cuenta de que realmente quería ser idol. Haruka valora intensamente a MORE MORE JUMP! y se siente más alegre tras la creación del grupo. Haruka a veces se preocupa por el bienestar de Minori, al ver que actúa de forma similar a Mai.\n                Es compañera de clase de Ichika y Saki. Forma parte del Comité Ejecutivo del Festival Deportivo junto con Saki y Emu.	Haruka es muy carismática, habiendo sido la integrante más popular de ASRUN. En palabras de Minori, es "el tipo de idol capaz de dar a todo el mundo la esperanza de un mañana mejor". Es una persona estricta y comprometida, con rutinas regulares de entrenamientos rigurosos para mantenerse al nivel de una idol. Sin embargo, debido a su excesiva diligencia, le cuesta relajarse y darse un descanso. Se priva de dulces y pasteles, lo que le provoca ansiedad. Está atenta a los horarios y ofertas de las pastelerías.\n                Haruka es tranquila pero valiente, sin miedo a replicar y burlarse de sus amigos. Es aficionada al deporte, le gusta el baloncesto y de niña era bastante competitiva. También le encantan los pingüinos, tiene un montón de merchandising de pingüinos y a veces se emociona cuando le regalan algo relacionado con ellos.	img/personajes/img-haruka.png	img/personajes/chibi-haruka.png	img/personajes/icon-haruka.png	img/personajes/stamp-haruka.png	img/personajes/sticker-haruka.png	img/personajes/comic-haruka.png
8	Shizuku Hinomori	2	Shizuku es una antigua miembro de la tercera generación del grupo de idols Cheerful*Days. Su amiga solicitó el puesto por ella sin que Shizuku lo supiera, pero ella decidió seguir adelante tras ser aceptada. Se formó para convertirse en idol al mismo tiempo que Airi, que la consideraba abiertamente una rival. Es más conocida entre los fans por su aspecto bello, misterioso y maduro. Sin embargo, esto provoca los celos de los demás miembros de su grupo, que piensan que no tiene ningún talento especial y que sólo es popular por su aspecto.\n                Un día, Shizuku conoce a Minori en la azotea de la escuela, a quien acepta ayudar a entrenar junto a Airi. Sin embargo, tras las crecientes tensiones en su grupo de idols y una discusión con Airi, decide abandonar Cheerful*Days. Minori y Airi le dan la esperanza de volver a ser idol, y tras realizar un espectáculo para Haruka en el Stage SEKAI, las cuatro forman MORE MORE JUMP!\n                Es miembro del Comité de Embellecimiento junto con Honami, y del club de tiro con arco junto con Mafuyu. Es compañera de clase de Airi.	Shizuku tiene una personalidad amable y madura. Le preocupa mucho decepcionar a sus fans, ya que siente que debe mantener una imagen "perfecta". Aunque pueda parecer muy tranquila y serena (y a menudo lo es), tiene algunas peculiaridades, como poner sopa de miso en su termo y ser extremadamente mala con la tecnología.\n                A medida que crece como idol, quiere dejar de mostrar la imagen del pasado que se vio obligada a mantener para sentirse cómoda, y desea ser fiel a sí misma pase lo que pase. Gracias a los miembros de MORE MORE JUMP! y especialmente a Airi, se dio cuenta de ello y se armó de valor para declarar este cambio.\n                Según su hermana Shiho, le encanta pasear, pero no recuerda los nombres de las calles. Como se muestra en múltiples conversaciones de la zona, se pierde incluso en lugares familiares para ella, como el centro comercial.	img/personajes/img-shizuku.png	img/personajes/chibi-shizuku.png	img/personajes/icon-shizuku.png	img/personajes/stamp-shizuku.png	img/personajes/sticker-shizuku.png	img/personajes/comic-shizuku.png
9	Kohane Azusawa	3	Un día, mientras intenta comprar un CD para su madre, Kohane se pierde y acaba en Vivid Street. Entra en el café WEEKEND GARAGE y se topa con la actuación de An y sus compañeros. La música de An la cautiva y vuelve al café para escucharla cantar. En su segunda visita, An la invita a cantar juntas. El apoyo de An anima a Kohane y juntas forman un dúo conocido como las Vivids.\n                Después de competir contra el dúo BAD DOGS, formado por Akito y Toya, Kohane y An forman equipo con ellos para convertirse en Vivid BAD SQUAD y así poder trabajar por su objetivo común de superar el evento musical RAD WEEKEND.\n                Es compañera de clase de Shiho y Minori, y es miembro del Comité de Cuidado de Animales con Minori.	Kohane es muy bondadosa y reservada. Antes de conocer a An y unirse a Vivid BAD SQUAD, era una chica callada y tímida a la que le faltaba confianza en sí misma y no le gustaba estar en público. Con el tiempo, se vuelve más abierta y valiente. Poco a poco va ganando confianza en sí misma y ya no tiene problemas para comunicarse. Sin embargo, en ocasiones, sigue sintiéndose nerviosa e intimidada ante personas como Akito o Toya, ya que solían ser rivales.\n                Kohane es una persona diligente y trabaja duro para mantenerse al día con el resto de su grupo. Aunque es la miembro más inexperta, los demás han observado que es increíblemente buena. alcanzando nuevos niveles de confianza y convirtiendo su canto en un instrumento aún más poderoso que antes.\n                A pesar de su timidez, le encantan las cosas exóticas, como las montañas rusas y el puenting. También tiene una serpiente como mascota, a la que An y los demás tienen miedo.	img/personajes/img-kohane.png	img/personajes/chibi-kohane.png	img/personajes/icon-kohane.png	img/personajes/stamp-kohane.png	img/personajes/sticker-kohane.png	img/personajes/comic-kohane.png
10	An Shiraishi	3	An es hija del popular ex músico Shiraishi Ken, que ahora posee un popular café y bar llamado WEEKEND GARAGE, donde ella trabaja. An espera superar algún día el legendario evento que él organizó, llamado RAD WEEKEND. Ha estado vinculada a la música desde que era pequeña, y empezó a cantar en parte porque sentía una conexión natural con ella, y también porque quería ser como su padre. Tiene muchos contactos en el mundo de la música callejera por ser hija de Ken.\n                Cuando Kohane volvió a WEEKEND GARAGE después de oír cantar allí a An, ésta la invitó a formar un grupo con ella, llamándose Vivids. Después de algunas rivalidades y conflictos, se unen a Akito y Toya de BAD DOGS para convertirse en Vivid BAD SQUAD, aunque ella y Kohane siguen activas como Vivids.\n                Es compañera de clase de Mizuki en el instituto Kamiyama.	An es una chica cool y abierta, con un espíritu inquebrantable. Se muestra muy cariñosa con sus amigos íntimos y es muy amable e indulgente. Causa una fuerte impresión en los demás y es difícil de olvidar. An anima a los que la rodean a dar lo mejor de sí mismos. Sin embargo, a veces puede mostrarse inusualmente agresiva con Akito debido a la rivalidad que se formó entre ellos al principio.\n                Al formar parte del Comité Disciplinario de Kamiyama, se pone nerviosa al insistir en que se sigan las normas, temblando y tartamudeando al pedir a alguien que se meta la camisa por dentro.	img/personajes/img-an.png	img/personajes/chibi-an.png	img/personajes/icon-an.png	img/personajes/stamp-an.png	img/personajes/sticker-an.png	img/personajes/comic-an.png
11	Akito Shinonome	3	Cuando Akito estaba en primaria, jugaba en un equipo de fútbol. Se le daba muy bien, pero decidió dejarlo después de que él y su equipo perdieran un torneo importante. Algún tiempo después de dejar de jugar al fútbol, su hermana mayor, Ena (que entonces estaba en la secundaria), le llevó a la fuerza a un festival de verano. Después de ver un concierto en el festival, Ena le sugirió que probara a cantar y le dio un pequeño discurso, diciéndole que no debía renunciar a las cosas sin siquiera molestarse en probarlas.\n                Esto despertó su interés por la música callejera, que con el tiempo se convirtió en el sueño de superar el legendario evento musical RAD WEEKEND. Ahora admira a Shiraishi Ken, el padre de An que actuó en RAD WEEKEND, y practica sin descanso para alcanzar su sueño. Cantó junto a Toya bajo el nombre de BAD DOGS antes de unirse a Vivids, el dúo de An y Kohane, para formar Vivid BAD SQUAD. Pese a unirse a Vivid BAD SQUAD, continúa actuando bajo el grupo BAD DOGS con Toya.\n                Su padre se muestra emocionalmente negligente tanto con él como con su hermana mayor. Rara vez se menciona a su madre.	Al principio, Akito parece un chico tranquilo. Sin embargo, su personalidad cambia drásticamente cuando hay música de por medio, volviéndose apasionado y temperamental hasta el punto de que la gente lo considera aterrador. Respeta a cualquiera que se muestre apasionado por lo que le interesa y odia a las personas poco comprometidas.\n                Actúa de forma educada con conocidos y extraños, pero cuando está en presencia de gente con la que está más familiarizado, deja de actuar así, mostrando su verdadera personalidad brusca. Aunque Akito puede ser grosero y en ocasiones gasta bromas a Tsukasa, es una persona fiable y cariñosa.\n                Cuando conoce a alguien nuevo, se muestra encantador, algo que a Toya no le gusta y a lo que se refiere como un personaje. Se le da bien mantener su fachada de cortesía y la utiliza cuando interactúa con los clientes en su lugar de trabajo.	img/personajes/img-akito.png	img/personajes/chibi-akito.png	img/personajes/icon-akito.png	img/personajes/stamp-akito.png	img/personajes/sticker-akito.png	img/personajes/comic-akito.png
12	Toya Aoyagi	3	El padre de Toya era un famoso músico clásico y formó a Toya y a sus dos hermanos mayores en la música clásica desde muy pequeños, enseñándoles piano y violín. Su padre aislaba a Toya y le obligaba a estudiar música clásica a todas horas del día, lo que le hizo despreciar a su padre y, por ende, a todo lo relacionado con la música clásica. Por ello, empezó a tocar música callejera para rebelarse contra su padre y acabó conociendo a Akito un día mientras cantaba en la calle.\n                Cantó con Akito bajo el nombre de BAD DOGS antes de unirse a Vivids, el dúo de An y Kohane, para formar Vivid BAD SQUAD. Pese a unirse a Vivid BAD SQUAD, sigue actuando bajo la unidad BAD DOGS con Akito.\n                Es compañero de clase de Nene en el instituto Kamiyama.	Toya es callado y tranquilo, pero tiene una mentalidad fuerte. Su rostro suele ser inexpresivo, y las personas que no son Akito y Tsukasa tienen dificultades para interpretar sus emociones. Cuando la gente habla con él, suelen confundirlo con una persona grosera, ya que es brusco y suele expresarse mal.\n                Hasta la evolución de su carácter, no solía sonreír con frecuencia. A pesar de su actitud estoica, es amable y se apresura a ayudar a los demás. Ocasionalmente puede ser cabeza hueca o crédulo.\n                Es bueno estudiando y saca buenas notas, un rasgo que comparte con Kohane. A veces puede ser estricto con Akito porque éste descuida sus estudios.	img/personajes/img-toya.png	img/personajes/chibi-toya.png	img/personajes/icon-toya.png	img/personajes/stamp-toya.png	img/personajes/sticker-toya.png	img/personajes/comic-toya.png
14	Emu Otori	4	Emu es la hija del propietario de Phoenix Wonderland, y creció viendo espectáculos en el parque. Tras ver que Tsukasa había fracasado en su audición, le contrata, junto con Nene y Rui, para devolver al descuidado Wonder Stage su antiguo esplendor.\n                Emu quiere actuar en el pequeño Wonder Stage y mantenerlo vivo, ya que era el escenario favorito de su difunto abuelo. Su abuelo, a quien admira mucho, le inspiró la idea de hacer sonreír a los demás.\n                Forma parte del Comité Ejecutivo del Festival Deportivo con Saki y Haruka. Es compañera de clase de  Honami en la Academia de Chicas Miyamasuzaka.	Con una personalidad alegre y algo ingenua, Emu es muy impulsiva y pone en práctica todas las ideas que se le ocurren, con tendencia a involucrar en sus planes a las personas que la rodean. Emu ha creado su propio eslogan, "Wonderhoy!", que utiliza para motivarse. Lo utiliza con frecuencia, casi siempre gritándolo después de la mayoría de sus frases. Cuando está con otros, les anima y a veces les empuja a gritarlo junto a ella, posiblemente para intentar motivarles con él.\n                Cuando Emu está en presencia de sus hermanos, parece bajar el tono de su personalidad optimista, volviéndose mucho más tranquila, lo que probablemente sea un efecto del desánimo de sus hermanos hacia ella. Su habitación es un reflejo de su actitud optimista, un revoltijo de colores y estampados que Emu considera que representan la felicidad.\n                Aunque al principio se apresura a ignorar sus propias inseguridades en favor de intentar poner una sonrisa en todo momento, a medida que se acerca a sus compañeros de banda, empieza a sentirse más cómoda con ellos. Tras encontrar un grupo de personas que comparten su objetivo de devolver al parque su antiguo esplendor, Emu se muestra muy agradecida a sus amigos y a su apoyo.\n                Al final, afirma que el grupo es una de las cosas más importantes para ella, y confía en ellos lo suficiente como para abrirse por fin sobre el impacto que ha tenido la negatividad de sus hermanos, llorando ante sus amigos mientras desahoga sus sentimientos. Emu tiene una intuición aguda cuando se trata de la sinceridad de las expresiones de una persona, aunque no parece ser plenamente consciente de ello.	img/personajes/img-emu.png	img/personajes/chibi-emu.png	img/personajes/icon-emu.png	img/personajes/stamp-emu.png	img/personajes/sticker-emu.png	img/personajes/comic-emu.png
15	Nene Kusanagi	4	Nene y Rui son vecinos y amigos de la infancia. Solían hacer espectáculos juntos cuando eran niños. Le gustaría dedicarse a la actuación. Cuando era pequeña, Nene se sintió inspirada para ser actriz después de ver a una actriz mundialmente famosa interpretar a La Sirenita.\n                En la secundaria, Nene se apuntó a un grupo de teatro y consiguió el papel protagonista. Ensayó con entusiasmo para no defraudar a los demás miembros. Desgraciadamente, el día de la representación se olvidó de su guión y no pudo decir nada. Este incidente le hizo perder la confianza en sí misma y, desde entonces, es incapaz de actuar sobre el escenario.\n                Nene se une al grupo a petición de Rui. Es una gran cantante, pero al principio no aparece en escena. En su lugar, maneja un robot llamado NeneRobo que Rui le ha hecho y actúa a través de él. Esto se debe a su ansiedad y miedo escénico. Al principio, Tsukasa la anima a subir de nuevo al escenario. Con la ayuda de los miembros de su grupo, supera su miedo escénico y se sube sola al escenario.\n                Es compañera de clase de Toya.	Nene es tímida y le cuesta hablar con los demás. No obstante, es muy tajante con la gente con la que se siente cómoda. Es de lengua afilada, y una vez llamó a Tsukasa "idiota que quiere ser la mayor estrella", a Emu "chica con una energía desbordante que siempre está gritando "Wonderhoy!", y a Rui "director que tiene la mente en las nubes".\n                A pesar de su carácter cortante, se preocupa mucho por sus amigos y hace todo lo posible por apoyarlos. También es muy trabajadora, y a menudo se queda hasta tarde después de los entrenamientos para ensayar sus propios papeles en los espectáculos.	img/personajes/img-nene.png	img/personajes/chibi-nene.png	img/personajes/icon-nene.png	img/personajes/stamp-nene.png	img/personajes/sticker-nene.png	img/personajes/comic-nene.png
16	Rui Kamishiro	4	Rui y Nene son vecinos y amigos de la infancia. Rui fue quien la recomendó para unirse al grupo. Dirige las representaciones escénicas de los grupos y es a su vez actor y director de escena de Wonderlands x Showtime. Rui es muy hábil inventando maquinaria y crea animatrónicos para los espectáculos.\n                Cuando Rui era pequeño, le encantaba crear espectáculos e intentaba incluir a sus compañeros en ellos. Sin embargo, debido a su excentricidad y a sus arriesgadas ideas, a sus compañeros no les gustaba hacer shows con él y lo rechazaban. Finalmente, Rui decidió que actuaría por su cuenta, utilizando robots como actores en lugar de personas reales. A menudo se le puede ver realizando espectáculos de guerrilla en la calle y/o en Phoenix Wonderland, lo que provoca que el personal de seguridad le persiga.\n                A pesar de su carácter independiente, en el fondo Rui desea volver a actuar con otras personas. Se le da esta oportunidad cuando se une a Wonderlands x Showtime, y aprecia enormemente cómo Tsukasa está dispuesto a probar sus inventos y direcciones escénicas.	Rui vive bajo sus propias reglas, lo que hace que la gente lo considere un bicho raro. Casi siempre está sonriendo y a veces se deja llevar por sus ideas excéntricas. Esto incluye utilizar a personas como maniquíes de prueba para sus ideas y someterlas a torturas en piscinas, como afirma Nene. A pesar del aparente riesgo de sus ideas, Rui hace todo lo posible por tener en cuenta la seguridad.\n                Rui también tiene un nivel de curiosidad que roza la obsesión, ya que le encanta desmontar juguetes y electrodomésticos para ver cómo funcionan. Ha expresado abiertamente su deseo de desmontar los peluches del Wonderland SEKAI, a lo que Tsukasa se opone.\n                Se preocupa mucho por sus amigos, como demostró cuando defendió a Emu y sus sueños de sus hermanos, así como cuando construyó a NeneRobo para ayudar a Nene con su miedo a hablar con los demás. También es una persona bromista y juguetona, y un ejemplo de ello son sus constantes ideas para actuaciones que a menudo implican poner en peligro la vida de Tsukasa.	img/personajes/img-rui.png	img/personajes/chibi-rui.png	img/personajes/icon-rui.png	img/personajes/stamp-rui.png	img/personajes/sticker-rui.png	img/personajes/comic-rui.png
17	Kanade Yoisaki	5	Cuando Kanade era pequeña, su madre enfermó y falleció. Su padre era músico y vivía de comisiones. El padre de Kanade reconocía su talento y decía que estaba "bendecida por la música", elogiándola a menudo por sus creaciones musicales. Un día, cuando Kanade entró en el despacho de su padre para decirle que la cena estaba lista, le vio frustrado por una canción que estaba componiendo para un concurso, insistiendo en que le faltaba algo. Ella se ofreció a ayudarle escribiéndole una parte, y él aceptó. Después de que Kanade añadiera su melodía y su padre presentara la canción, ésta acabó ganando el concurso. Sin embargo, la canción sólo tuvo éxito gracias a la contribución de Kanade, ya que su parte se incluyó en un anuncio.\n                Después, su padre consiguió muchos clientes nuevos que le pidieron que creara una música similar a la del anuncio. A pesar de sus esfuerzos, no pudo igualar el estilo musical de Kanade y se sobrecargó de trabajo hasta el punto de quebrarse. El estrés psicológico le afectó gravemente a la memoria. Kanade se sintió culpable y se culpó a sí misma del estado de su padre. Durante un tiempo, pensó en morir de hambre, preguntándose si desaparecería si dejaba de comer. Sin embargo, redescubrió la vieja caja de música de su madre y se dio cuenta de que debía seguir adelante para escribir canciones que aportaran felicidad a los demás.\n                Ahora Kanade compone canciones con la intención de salvar al menos a una persona y es la compositora de Nightcord at 25:00. Kanade tiene complejo de Mesías.	Kanade es muy tolerante y comprensiva con sus compañeros del círculo; están agradecidos por ella y por el grupo que ha creado. Aspira a hacer felices a los demás con su música, como una vez hizo su padre. Es increíblemente trabajadora hasta el punto de no dormir y esforzarse en exceso, por lo que pone casi demasiado empeño en su trabajo. Además, Kanade insta a los demás miembros del círculo a que descansen mientras sigue esforzándose por hacer más y más canciones.\n                Kanade rara vez sale de casa y pasa la mayor parte del tiempo componiendo música. Sin embargo, de vez en cuando sale para visitar a su padre en el hospital, reunirse con su grupo o comprar nuevos dispositivos electrónicos. Es más sensible a la luz solar que otras personas. Como resultado de su reclusión, Kanade tiene una condición física débil. Tampoco cuida bien de sí misma, come fideos casi siempre y tiene problemas con las tareas domésticas básicas. Carece de un horario de sueño constante y suele quedarse dormida mientras trabaja.\n                Atormentada por lo que su música le hizo a su padre, como causa de su trauma, Kanade jura hacer música que salve a cualquiera. Su complejo de salvadora se hace evidente cuando siente que ha fracasado como músico si su música no sirve para ayudar a los demás. Decidida a salvar a Mafuyu con su música, jura que seguirá escribiendo, aunque su talento sea una maldición para ella.	img/personajes/img-kanade.png	img/personajes/chibi-kanade.png	img/personajes/icon-kanade.png	img/personajes/stamp-kanade.png	img/personajes/sticker-kanade.png	img/personajes/comic-kanade.png
18	Mafuyu Asahina	5	Mafuyu es una estudiante de honor y la única de su círculo que asiste regularmente a clase durante el día. Siempre saca buenas notas y es la delegada de su clase. Se dice que destaca tanto en los estudios como en los deportes; por eso, la gente suele ponerle el listón muy alto para que sobresalga en todo, cosa que ella hace sin falta. Sin embargo, en realidad se siente muy agobiada y presionada por lo que esperan de ella sus compañeros y sus padres (especialmente su madre).\n                Mafuyu tenía sus propias aficiones e intereses. En secundaria, aspiraba a ser enfermera. Sin embargo, sus padres la presionaron para que fuera médico, y Mafuyu accedió, queriendo hacerles felices. A medida que Mafuyu se iba adaptando a las expectativas de sus padres y de sus compañeros, fue perdiendo el sentido de su propia identidad, convirtiéndose en la cáscara vacía de la persona que es ahora. Ya no recuerda lo que le gusta y tiene dificultades incluso para reconocer sus propias emociones.\n                Sus padres, que la han empujado a hacer lo que ellos quieren y creen que es lo mejor para Mafuyu en lugar de dejarla perseguir sus propios sueños, son en gran parte culpables de su actual aflicción. Además de perder el sentido de sí misma, perdió la capacidad de saborear y disfrutar de la comida en la secundaria.\n                Es miembro del club de tiro con arco con Shizuku.	Mafuyu es admirada por su inteligencia, su capacidad atlética y la humilde sinceridad que muestra cuando la elogian por estos talentos. Es conocida por su amabilidad, generosidad y consideración, por sus palabras siempre educadas y por su voz suave y cálida. Es difícil, incluso imposible, hacerla enfadar, ya que cualquier vacilación que muestre que pudiera indicar desacuerdo o desagrado queda inmediatamente cubierta con una amable sonrisa. Los demás no temen confiar en ella, y a menudo tienen grandes esperanzas puestas en ella, sabiendo que ha cumplido las expectativas antes y que seguirá haciéndolo.\n                Para los demás, Mafuyu es una "buena chica". Sin embargo, para sí misma y para los demás miembros de su grupo, es desapasionada y carece de emociones y empatía. Ha perdido su verdadero yo hace mucho tiempo y busca desesperadamente reencontrarse a sí misma. Bajo su fachada, la personalidad de Mafuyu es mucho más fría y contundente. Su voz es apagada y su rostro plano, ambos con pocos sentimientos. Pronuncia pocas palabras, y las que pronuncia no suelen ser más que las necesarias. Aunque no es agradable, educada ni "buena", es honesta, y sólo dentro de su fría honestidad tiene la más mínima oportunidad de mostrar sus verdaderos sentimientos. Los otros miembros de Nightcord at 25:00 reconocen esto en su voluntad de ofrecer un espacio donde ella pueda ser "rehabilitada".\n                Mafuyu es una experta artista musical, como demuestra la música que produjo bajo el nombre artístico de OWN. Compuso su música por separado de los demás miembros de Nightcord en un intento de encontrarse a sí misma. La música de OWN era bastante popular, y tanto Ena como Mizuki quedaron impresionadas por ella. En comparación con las obras de Kanade, se decía que las canciones de Mafuyu eran intensamente frías y cortantes, carentes de la sensación de calidez que poseía la música de Kanade.\n                A medida que Kanade y los demás miembros de Nightcord at 25:00 intentan ayudar a Mafuyu, ésta se vuelve poco a poco más receptiva. Al ver una marioneta en una exposición de muñecas, siente un intenso asco y pánico, posiblemente porque la marioneta le recordaba inconscientemente a sí misma.	img/personajes/img-mafuyu.png	img/personajes/chibi-mafuyu.png	img/personajes/icon-mafuyu.png	img/personajes/stamp-mafuyu.png	img/personajes/sticker-mafuyu.png	img/personajes/comic-mafuyu.png
20	Mizuki Akiyama	5	Mizuki trabaja en animación y realización de vídeos y cuelga sus MV en Internet. La música de Yoisaki Kanade le cautivó al escucharla. Kanade vio el MV que hizo Mizuki y le invitó al círculo.\n                Desde el instituto, los demás marginan a Mizuki por vestirse y actuar de forma peculiar. Mizuki expresa su confusión por las críticas, ya que no ve nada malo en querer vestirse de forma linda. No asiste a la escuela con regularidad debido a la atención negativa de sus compañeros.\n                Mizuki está en la misma clase que An. Mizuki tiene una hermana mayor que vive en el extranjero.	Mizuki es una persona temperamental, y Kanade cree que sólo actúa según sus propios intereses. Suele frustrarse y enfadarse cuando se le ridiculiza, y tiene un fuerte deseo de expresarse libremente, sin contenerse ni ser objeto de burla. Tiene una obsesión por las cosas lindas, y lo expresa a través de su moda artesanal. A pesar de su comportamiento enérgico, despreocupado y a veces infantil, Mizuki se muestra a menudo como siendo la persona más madura de Nightcord at 25:00, como la propia Ena admite. A menudo asume el papel de mediadora en las discusiones, separando las diferencias entre ambas.\n                Mizuki es una persona bastante introspectiva, por lo que suele ser quien que sugiere descansos cuando nota que sus compañeros están cansadas o especialmente estresados. Mientras que Kanade tiende a centrarse en una tarea determinada, Mizuki mantiene su atención al menos un poco anclada en la realidad, capaz de percibir los cambios de tensión y ambiente en el grupo. Es capaz de llegar a conclusiones bastante matizadas sobre los problemas, así como sobre las personas, como resulta evidente en la forma en que hablaron de sus sentimientos hacia la desaparición de Mafuyu; explicando sus emociones pero reconociendo que no es su responsabilidad responder a los sentimientos de Mizuki o sentirse salvada por ellos.\n                Para bien o para mal, tienen un fuerte sentido de los límites: cuándo involucrarse en los asuntos de los demás y cuándo involucrar a los demás en sus propios asuntos. Reconoce que debe comprender las preocupaciones de los demás antes de dar su opinión.\n                Parece que se mantiene en secreto, hasta cierto punto, porque entiende que todo el mundo tiene cosas que quiere mantener ocultas.	img/personajes/img-mizuki.png	img/personajes/chibi-mizuki.png	img/personajes/icon-mizuki.png	img/personajes/stamp-mizuki.png	img/personajes/sticker-mizuki.png	img/personajes/comic-mizuki.png
\.


--
-- Data for Name: personal_access_tokens; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: posts; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.posts (id, created_at, updated_at, contenido, user_id) FROM stdin;
73	2023-05-19 18:38:24	2023-05-19 18:38:24	aasddsafssa	5
74	2023-05-19 18:38:47	2023-05-19 18:38:47	dsfdsafdsafsdafsa	5
75	2023-05-19 18:38:50	2023-05-19 18:38:50	adsfdsafadsfdasfads	5
76	2023-05-19 18:38:54	2023-05-19 18:38:54	adsfdsfadsfdas	5
77	2023-05-24 15:33:07	2023-05-24 15:33:07	sdfgdshgdsklmdkf	5
\.


--
-- Data for Name: preguntas; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.preguntas (id, pregunta) FROM stdin;
\.


--
-- Data for Name: relaciones; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.relaciones (id, pj1_id, pj2_id, descripcion) FROM stdin;
\.


--
-- Data for Name: respuestas; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.respuestas (id, respuesta, pj_id, pregunta_id) FROM stdin;
\.


--
-- Data for Name: trivia; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.trivia (id, dato, pj_id) FROM stdin;
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, admin, valido, avatar, biografia, cumple, twitter, discord, grupo_fav_id, pj_fav_id) FROM stdin;
4	juan	juan@juan.com	\N	$2y$10$Yaps6eO3X3Hz5AtWe0ciCefYqU09A/xDhEkNZf2J1JE97zjJ9msbe	\N	2023-05-07 14:39:17	2023-05-18 12:52:20	f	t	\N	\N	\N	\N	\N	\N	\N
2	pepe	pepe@pepe.com	\N	pepepepe	\N	\N	2023-05-18 12:52:24	f	t	\N	\N	\N	\N	\N	\N	\N
5	admin	admin@admin.com	\N	$2y$10$Mhjo5SX6KjPdabTZC0zi/.ukbE0zd/YuNwbeDe9oouuA2r6qXOhxG	\N	2023-05-07 14:59:04	2023-05-24 15:31:29	t	t	\N	hola :3sdfdsaf	\N	@pepeqweqweqwe	pepe#1234	4	8
\.


--
-- Data for Name: valoraciones; Type: TABLE DATA; Schema: public; Owner: pro
--

COPY public.valoraciones (post_id, user_id) FROM stdin;
73	5
74	5
75	5
76	5
\.


--
-- Name: cartas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pro
--

SELECT pg_catalog.setval('public.cartas_id_seq', 4, true);


--
-- Name: eventos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pro
--

SELECT pg_catalog.setval('public.eventos_id_seq', 1, false);


--
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pro
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- Name: grupos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pro
--

SELECT pg_catalog.setval('public.grupos_id_seq', 7, true);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pro
--

SELECT pg_catalog.setval('public.migrations_id_seq', 20, true);


--
-- Name: personajes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pro
--

SELECT pg_catalog.setval('public.personajes_id_seq', 21, true);


--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pro
--

SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);


--
-- Name: posts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pro
--

SELECT pg_catalog.setval('public.posts_id_seq', 77, true);


--
-- Name: preguntas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pro
--

SELECT pg_catalog.setval('public.preguntas_id_seq', 1, false);


--
-- Name: relaciones_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pro
--

SELECT pg_catalog.setval('public.relaciones_id_seq', 1, false);


--
-- Name: respuestas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pro
--

SELECT pg_catalog.setval('public.respuestas_id_seq', 1, false);


--
-- Name: trivia_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pro
--

SELECT pg_catalog.setval('public.trivia_id_seq', 1, false);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pro
--

SELECT pg_catalog.setval('public.users_id_seq', 5, true);


--
-- Name: cartas cartas_pkey; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.cartas
    ADD CONSTRAINT cartas_pkey PRIMARY KEY (id);


--
-- Name: eventos eventos_pkey; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.eventos
    ADD CONSTRAINT eventos_pkey PRIMARY KEY (id);


--
-- Name: failed_jobs failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- Name: failed_jobs failed_jobs_uuid_unique; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);


--
-- Name: grupos grupos_pkey; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.grupos
    ADD CONSTRAINT grupos_pkey PRIMARY KEY (id);


--
-- Name: inventario inventario_user_id_carta_id_unique; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.inventario
    ADD CONSTRAINT inventario_user_id_carta_id_unique UNIQUE (user_id, carta_id);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: password_resets password_resets_pkey; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.password_resets
    ADD CONSTRAINT password_resets_pkey PRIMARY KEY (email);


--
-- Name: personajes personajes_pkey; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.personajes
    ADD CONSTRAINT personajes_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_token_unique; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);


--
-- Name: posts posts_pkey; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.posts
    ADD CONSTRAINT posts_pkey PRIMARY KEY (id);


--
-- Name: preguntas preguntas_pkey; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.preguntas
    ADD CONSTRAINT preguntas_pkey PRIMARY KEY (id);


--
-- Name: relaciones relaciones_pj1_id_pj2_id_unique; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.relaciones
    ADD CONSTRAINT relaciones_pj1_id_pj2_id_unique UNIQUE (pj1_id, pj2_id);


--
-- Name: relaciones relaciones_pkey; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.relaciones
    ADD CONSTRAINT relaciones_pkey PRIMARY KEY (id);


--
-- Name: respuestas respuestas_pkey; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.respuestas
    ADD CONSTRAINT respuestas_pkey PRIMARY KEY (id);


--
-- Name: trivia trivia_pkey; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.trivia
    ADD CONSTRAINT trivia_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens_tokenable_type_tokenable_id_index; Type: INDEX; Schema: public; Owner: pro
--

CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);


--
-- Name: cartas cartas_pj_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.cartas
    ADD CONSTRAINT cartas_pj_id_foreign FOREIGN KEY (pj_id) REFERENCES public.personajes(id);


--
-- Name: personajes personajes_grupo_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.personajes
    ADD CONSTRAINT personajes_grupo_id_foreign FOREIGN KEY (grupo_id) REFERENCES public.grupos(id);


--
-- Name: posts posts_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.posts
    ADD CONSTRAINT posts_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: relaciones relaciones_pj1_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.relaciones
    ADD CONSTRAINT relaciones_pj1_id_foreign FOREIGN KEY (pj1_id) REFERENCES public.personajes(id);


--
-- Name: relaciones relaciones_pj2_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.relaciones
    ADD CONSTRAINT relaciones_pj2_id_foreign FOREIGN KEY (pj2_id) REFERENCES public.personajes(id);


--
-- Name: respuestas respuestas_pj_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.respuestas
    ADD CONSTRAINT respuestas_pj_id_foreign FOREIGN KEY (pj_id) REFERENCES public.personajes(id);


--
-- Name: respuestas respuestas_pregunta_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.respuestas
    ADD CONSTRAINT respuestas_pregunta_id_foreign FOREIGN KEY (pregunta_id) REFERENCES public.preguntas(id);


--
-- Name: trivia trivia_pj_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.trivia
    ADD CONSTRAINT trivia_pj_id_foreign FOREIGN KEY (pj_id) REFERENCES public.personajes(id);


--
-- Name: users users_grupo_fav_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_grupo_fav_id_foreign FOREIGN KEY (grupo_fav_id) REFERENCES public.grupos(id);


--
-- Name: users users_pj_fav_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pj_fav_id_foreign FOREIGN KEY (pj_fav_id) REFERENCES public.personajes(id);


--
-- Name: valoraciones valoraciones_post_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.valoraciones
    ADD CONSTRAINT valoraciones_post_id_foreign FOREIGN KEY (post_id) REFERENCES public.posts(id) ON DELETE CASCADE;


--
-- Name: valoraciones valoraciones_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: pro
--

ALTER TABLE ONLY public.valoraciones
    ADD CONSTRAINT valoraciones_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- PostgreSQL database dump complete
--

