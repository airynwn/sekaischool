<?php

namespace Database\Seeders;

use App\Models\Carta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=CartasSeeder
        // 1-30; 279-318
        $cartas = [
            [
                "nombre" => "Distant Yet Caring", "rareza" => 1, "atributo" => "cool", "unidolized" => "img/cartas/1_1.png", "idolized" => "img/cartas/1_2.png", "unidolized_icon" => "img/cartas/1_1_icon.png", "idolized_icon" => "img/cartas/1_2_icon.png", "pj_id" => 1
            ],
            [
                "nombre" => "Leo/need", "rareza" => 2, "atributo" => "happy", "unidolized" => "img/cartas/2_1.png", "idolized" => "img/cartas/2_2.png", "unidolized_icon" => "img/cartas/2_1_icon.png", "idolized_icon" => "img/cartas/2_2_icon.png", "pj_id" => 1
            ],
            [
                "nombre" => "Beyond The Sky", "rareza" => 3, "atributo" => "mysterious", "unidolized" => "img/cartas/3_1.png", "idolized" => "img/cartas/3_2.png", "unidolized_icon" => "img/cartas/3_1_icon.png", "idolized_icon" => "img/cartas/3_2_icon.png", "pj_id" => 1
            ],
            [
                "nombre" => "Words Before Dawn", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/4_1.png", "idolized" => "img/cartas/4_2.png", "unidolized_icon" => "img/cartas/4_1_icon.png", "idolized_icon" => "img/cartas/4_2_icon.png", "pj_id" => 1
            ],
            [
                "nombre" => "The Ever Cheerful One", "rareza" => 1, "atributo" => "cute", "unidolized" => "img/cartas/5_1.png", "idolized" => "img/cartas/5_2.png", "unidolized_icon" => "img/cartas/5_1_icon.png", "idolized_icon" => "img/cartas/5_2_icon.png", "pj_id" => 2
            ],
            [
                "nombre" => "Leo/need", "rareza" => 2, "atributo" => "pure", "unidolized" => "img/cartas/6_1.png", "idolized" => "img/cartas/6_2.png", "unidolized_icon" => "img/cartas/6_1_icon.png", "idolized_icon" => "img/cartas/6_2_icon.png", "pj_id" => 2
            ],
            [
                "nombre" => "100 Things I Want To Do", "rareza" => 3, "atributo" => "cool", "unidolized" => "img/cartas/7_1.png", "idolized" => "img/cartas/7_2.png", "unidolized_icon" => "img/cartas/7_1_icon.png", "idolized_icon" => "img/cartas/7_2_icon.png", "pj_id" => 2
            ],
            [
                "nombre" => "The Kind Honor Student", "rareza" => 1, "atributo" => "mysterious", "unidolized" => "img/cartas/9_1.png", "idolized" => "img/cartas/9_2.png", "unidolized_icon" => "img/cartas/9_1_icon.png", "idolized_icon" => "img/cartas/9_2_icon.png", "pj_id" => 3
            ],
            [
                "nombre" => "Leo/need", "rareza" => 2, "atributo" => "cool", "unidolized" => "img/cartas/10_1.png", "idolized" => "img/cartas/10_2.png", "unidolized_icon" => "img/cartas/10_1_icon.png", "idolized_icon" => "img/cartas/10_2_icon.png", "pj_id" => 3
            ],
            [
                "nombre" => "Unchanging Flavor", "rareza" => 3, "atributo" => "happy", "unidolized" => "img/cartas/11_1.png", "idolized" => "img/cartas/11_2.png", "unidolized_icon" => "img/cartas/11_1_icon.png", "idolized_icon" => "img/cartas/11_2_icon.png", "pj_id" => 3
            ],
            [
                "nombre" => "Distant Loner", "rareza" => 1, "atributo" => "happy", "unidolized" => "img/cartas/13_1.png", "idolized" => "img/cartas/13_2.png", "unidolized_icon" => "img/cartas/13_1_icon.png", "idolized_icon" => "img/cartas/13_2_icon.png", "pj_id" => 4
            ],
            [
                "nombre" => "Leo/need", "rareza" => 2, "atributo" => "mysterious", "unidolized" => "img/cartas/14_1.png", "idolized" => "img/cartas/14_2.png", "unidolized_icon" => "img/cartas/14_1_icon.png", "idolized_icon" => "img/cartas/14_2_icon.png", "pj_id" => 4
            ],
            [
                "nombre" => "Lingering Melody", "rareza" => 3, "atributo" => "cute", "unidolized" => "img/cartas/15_1.png", "idolized" => "img/cartas/15_2.png", "unidolized_icon" => "img/cartas/15_1_icon.png", "idolized_icon" => "img/cartas/15_2_icon.png", "pj_id" => 4
            ],
            [
                "nombre" => "Aiming To Be An Idol!", "rareza" => 1, "atributo" => "pure", "unidolized" => "img/cartas/17_1.png", "idolized" => "img/cartas/17_2.png", "unidolized_icon" => "img/cartas/17_1_icon.png", "idolized_icon" => "img/cartas/17_2_icon.png", "pj_id" => 5
            ],
            [
                "nombre" => "MORE MORE JUMP!", "rareza" => 2, "atributo" => "cool", "unidolized" => "img/cartas/18_1.png", "idolized" => "img/cartas/18_2.png", "unidolized_icon" => "img/cartas/18_1_icon.png", "idolized_icon" => "img/cartas/18_2_icon.png", "pj_id" => 5
            ],
            [
                "nombre" => "Pre-Show Prep", "rareza" => 3, "atributo" => "cute", "unidolized" => "img/cartas/19_1.png", "idolized" => "img/cartas/19_2.png", "unidolized_icon" => "img/cartas/19_1_icon.png", "idolized_icon" => "img/cartas/19_2_icon.png", "pj_id" => 5
            ],
            [
                "nombre" => "Former National Idol", "rareza" => 1, "atributo" => "happy", "unidolized" => "img/cartas/21_1.png", "idolized" => "img/cartas/21_2.png", "unidolized_icon" => "img/cartas/21_1_icon.png", "idolized_icon" => "img/cartas/21_2_icon.png", "pj_id" => 6
            ],
            [
                "nombre" => "MORE MORE JUMP!", "rareza" => 2, "atributo" => "pure", "unidolized" => "img/cartas/22_1.png", "idolized" => "img/cartas/22_2.png", "unidolized_icon" => "img/cartas/22_1_icon.png", "idolized_icon" => "img/cartas/22_2_icon.png", "pj_id" => 6
            ],
            [
                "nombre" => "The Non-Idol Me", "rareza" => 3, "atributo" => "cool", "unidolized" => "img/cartas/23_1.png", "idolized" => "img/cartas/23_2.png", "unidolized_icon" => "img/cartas/23_1_icon.png", "idolized_icon" => "img/cartas/23_2_icon.png", "pj_id" => 6
            ],
            [
                "nombre" => "Unyielding Idol Spirit", "rareza" => 1, "atributo" => "mysterious", "unidolized" => "img/cartas/25_1.png", "idolized" => "img/cartas/25_2.png", "unidolized_icon" => "img/cartas/25_1_icon.png", "idolized_icon" => "img/cartas/25_2_icon.png", "pj_id" => 7
            ],
            [
                "nombre" => "MORE MORE JUMP!", "rareza" => 2, "atributo" => "cute", "unidolized" => "img/cartas/26_1.png", "idolized" => "img/cartas/26_2.png", "unidolized_icon" => "img/cartas/26_1_icon.png", "idolized_icon" => "img/cartas/26_2_icon.png", "pj_id" => 7
            ],
            [
                "nombre" => "Follow Your Dreams!", "rareza" => 3, "atributo" => "pure", "unidolized" => "img/cartas/27_1.png", "idolized" => "img/cartas/27_2.png", "unidolized_icon" => "img/cartas/27_1_icon.png", "idolized_icon" => "img/cartas/27_2_icon.png", "pj_id" => 7
            ],
            [
                "nombre" => "Beautiful Active Idol", "rareza" => 1, "atributo" => "cute", "unidolized" => "img/cartas/29_1.png", "idolized" => "img/cartas/29_2.png", "unidolized_icon" => "img/cartas/29_1_icon.png", "idolized_icon" => "img/cartas/29_2_icon.png", "pj_id" => 8
            ],
            [
                "nombre" => "MORE MORE JUMP!", "rareza" => 2, "atributo" => "mysterious", "unidolized" => "img/cartas/30_1.png", "idolized" => "img/cartas/30_2.png", "unidolized_icon" => "img/cartas/30_1_icon.png", "idolized_icon" => "img/cartas/30_2_icon.png", "pj_id" => 8
            ],
            // [
            //     "nombre" => "On A Flashy Stage", "rareza" => 3, "atributo" => "happy", "unidolized" => "img/cartas/31_1.png", "idolized" => "img/cartas/31_2.png", "unidolized_icon" => "img/cartas/31_1_icon.png", "idolized_icon" => "img/cartas/31_2_icon.png", "pj_id" => 8
            // ],
            // [
            //     "nombre" => "Tiny Timid Creature", "rareza" => 1, "atributo" => "pure", "unidolized" => "img/cartas/33_1.png", "idolized" => "img/cartas/33_2.png", "unidolized_icon" => "img/cartas/33_1_icon.png", "idolized_icon" => "img/cartas/33_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "Vivid BAD SQUAD", "rareza" => 2, "atributo" => "mysterious", "unidolized" => "img/cartas/34_1.png", "idolized" => "img/cartas/34_2.png", "unidolized_icon" => "img/cartas/34_1_icon.png", "idolized_icon" => "img/cartas/34_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "A Quick Breather", "rareza" => 3, "atributo" => "cool", "unidolized" => "img/cartas/35_1.png", "idolized" => "img/cartas/35_2.png", "unidolized_icon" => "img/cartas/35_1_icon.png", "idolized_icon" => "img/cartas/35_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "Charismatic Singer", "rareza" => 1, "atributo" => "cute", "unidolized" => "img/cartas/37_1.png", "idolized" => "img/cartas/37_2.png", "unidolized_icon" => "img/cartas/37_1_icon.png", "idolized_icon" => "img/cartas/37_2_icon.png", "pj_id" => 10
            // ],
            // [
            //     "nombre" => "Vivid BAD SQUAD", "rareza" => 2, "atributo" => "cool", "unidolized" => "img/cartas/38_1.png", "idolized" => "img/cartas/38_2.png", "unidolized_icon" => "img/cartas/38_1_icon.png", "idolized_icon" => "img/cartas/38_2_icon.png", "pj_id" => 10
            // ],
            // [
            //     "nombre" => "Top-Notch Server!", "rareza" => 3, "atributo" => "pure", "unidolized" => "img/cartas/39_1.png", "idolized" => "img/cartas/39_2.png", "unidolized_icon" => "img/cartas/39_1_icon.png", "idolized_icon" => "img/cartas/39_2_icon.png", "pj_id" => 10
            // ],
            // [
            //     "nombre" => "Well-Known Big Shot", "rareza" => 1, "atributo" => "happy", "unidolized" => "img/cartas/41_1.png", "idolized" => "img/cartas/41_2.png", "unidolized_icon" => "img/cartas/41_1_icon.png", "idolized_icon" => "img/cartas/41_2_icon.png", "pj_id" => 11
            // ],
            // [
            //     "nombre" => "Vivid BAD SQUAD", "rareza" => 2, "atributo" => "cute", "unidolized" => "img/cartas/42_1.png", "idolized" => "img/cartas/42_2.png", "unidolized_icon" => "img/cartas/42_1_icon.png", "idolized_icon" => "img/cartas/42_2_icon.png", "pj_id" => 11
            // ],
            // [
            //     "nombre" => "Bristling Irritation", "rareza" => 3, "atributo" => "happy", "unidolized" => "img/cartas/43_1.png", "idolized" => "img/cartas/43_2.png", "unidolized_icon" => "img/cartas/43_1_icon.png", "idolized_icon" => "img/cartas/43_2_icon.png", "pj_id" => 11
            // ],
            // [
            //     "nombre" => "Classical Prodigy", "rareza" => 1, "atributo" => "cool", "unidolized" => "img/cartas/45_1.png", "idolized" => "img/cartas/45_2.png", "unidolized_icon" => "img/cartas/45_1_icon.png", "idolized_icon" => "img/cartas/45_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "Vivid BAD SQUAD", "rareza" => 2, "atributo" => "happy", "unidolized" => "img/cartas/46_1.png", "idolized" => "img/cartas/46_2.png", "unidolized_icon" => "img/cartas/46_1_icon.png", "idolized_icon" => "img/cartas/46_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "Broken Bonds", "rareza" => 3, "atributo" => "cute", "unidolized" => "img/cartas/47_1.png", "idolized" => "img/cartas/47_2.png", "unidolized_icon" => "img/cartas/47_1_icon.png", "idolized_icon" => "img/cartas/47_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "Headed For Stardom!", "rareza" => 1, "atributo" => "happy", "unidolized" => "img/cartas/49_1.png", "idolized" => "img/cartas/49_2.png", "unidolized_icon" => "img/cartas/49_1_icon.png", "idolized_icon" => "img/cartas/49_2_icon.png", "pj_id" => 13
            // ],
            // [
            //     "nombre" => "Wonderlands×Showtime", "rareza" => 2, "atributo" => "cute", "unidolized" => "img/cartas/50_1.png", "idolized" => "img/cartas/50_2.png", "unidolized_icon" => "img/cartas/50_1_icon.png", "idolized_icon" => "img/cartas/50_2_icon.png", "pj_id" => 13
            // ],
            // [
            //     "nombre" => "Mascot Greeting", "rareza" => 3, "atributo" => "mysterious", "unidolized" => "img/cartas/51_1.png", "idolized" => "img/cartas/51_2.png", "unidolized_icon" => "img/cartas/51_1_icon.png", "idolized_icon" => "img/cartas/51_2_icon.png", "pj_id" => 13
            // ],
            // [
            //     "nombre" => "Hyper★Positive", "rareza" => 1, "atributo" => "pure", "unidolized" => "img/cartas/53_1.png", "idolized" => "img/cartas/53_2.png", "unidolized_icon" => "img/cartas/53_1_icon.png", "idolized_icon" => "img/cartas/53_2_icon.png", "pj_id" => 14
            // ],
            // [
            //     "nombre" => "Wonderlands×Showtime", "rareza" => 2, "atributo" => "mysterious", "unidolized" => "img/cartas/54_1.png", "idolized" => "img/cartas/54_2.png", "unidolized_icon" => "img/cartas/54_1_icon.png", "idolized_icon" => "img/cartas/54_2_icon.png", "pj_id" => 14
            // ],
            // [
            //     "nombre" => "Time For A Strategy Meeting!", "rareza" => 3, "atributo" => "cute", "unidolized" => "img/cartas/55_1.png", "idolized" => "img/cartas/55_2.png", "unidolized_icon" => "img/cartas/55_1_icon.png", "idolized_icon" => "img/cartas/55_2_icon.png", "pj_id" => 14
            // ],
            // [
            //     "nombre" => "Sharp-Tongued And Unsociable", "rareza" => 1, "atributo" => "cool", "unidolized" => "img/cartas/57_1.png", "idolized" => "img/cartas/57_2.png", "unidolized_icon" => "img/cartas/57_1_icon.png", "idolized_icon" => "img/cartas/57_2_icon.png", "pj_id" => 15
            // ],
            // [
            //     "nombre" => "Wonderlands×Showtime", "rareza" => 2, "atributo" => "cool", "unidolized" => "img/cartas/58_1.png", "idolized" => "img/cartas/58_2.png", "unidolized_icon" => "img/cartas/58_1_icon.png", "idolized_icon" => "img/cartas/58_2_icon.png", "pj_id" => 15
            // ],
            // [
            //     "nombre" => "Backstage Operator", "rareza" => 3, "atributo" => "pure", "unidolized" => "img/cartas/59_1.png", "idolized" => "img/cartas/59_2.png", "unidolized_icon" => "img/cartas/59_1_icon.png", "idolized_icon" => "img/cartas/59_2_icon.png", "pj_id" => 15
            // ],
            // [
            //     "nombre" => "Carefree Prodigy", "rareza" => 1, "atributo" => "mysterious", "unidolized" => "img/cartas/61_1.png", "idolized" => "img/cartas/61_2.png", "unidolized_icon" => "img/cartas/61_1_icon.png", "idolized_icon" => "img/cartas/61_2_icon.png", "pj_id" => 16
            // ],
            // [
            //     "nombre" => "Wonderlands×Showtime", "rareza" => 2, "atributo" => "pure", "unidolized" => "img/cartas/62_1.png", "idolized" => "img/cartas/62_2.png", "unidolized_icon" => "img/cartas/62_1_icon.png", "idolized_icon" => "img/cartas/62_2_icon.png", "pj_id" => 16
            // ],
            // [
            //     "nombre" => "Evasive Entertainer", "rareza" => 3, "atributo" => "happy", "unidolized" => "img/cartas/63_1.png", "idolized" => "img/cartas/63_2.png", "unidolized_icon" => "img/cartas/63_1_icon.png", "idolized_icon" => "img/cartas/63_2_icon.png", "pj_id" => 16
            // ],
            // [
            //     "nombre" => "Loved By Music", "rareza" => 1, "atributo" => "mysterious", "unidolized" => "img/cartas/65_1.png", "idolized" => "img/cartas/65_2.png", "unidolized_icon" => "img/cartas/65_1_icon.png", "idolized_icon" => "img/cartas/65_2_icon.png", "pj_id" => 17
            // ],
            // [
            //     "nombre" => "Nightcord at 25:00", "rareza" => 2, "atributo" => "cute", "unidolized" => "img/cartas/66_1.png", "idolized" => "img/cartas/66_2.png", "unidolized_icon" => "img/cartas/66_1_icon.png", "idolized_icon" => "img/cartas/66_2_icon.png", "pj_id" => 17
            // ],
            // [
            //     "nombre" => "Beyond The Screen...", "rareza" => 3, "atributo" => "happy", "unidolized" => "img/cartas/67_1.png", "idolized" => "img/cartas/67_2.png", "unidolized_icon" => "img/cartas/67_1_icon.png", "idolized_icon" => "img/cartas/67_2_icon.png", "pj_id" => 17
            // ],
            // [
            //     "nombre" => "The Honor Student", "rareza" => 1, "atributo" => "cool", "unidolized" => "img/cartas/69_1.png", "idolized" => "img/cartas/69_2.png", "unidolized_icon" => "img/cartas/69_1_icon.png", "idolized_icon" => "img/cartas/69_2_icon.png", "pj_id" => 18
            // ],
            // [
            //     "nombre" => "Nightcord at 25:00", "rareza" => 2, "atributo" => "happy", "unidolized" => "img/cartas/70_1.png", "idolized" => "img/cartas/70_2.png", "unidolized_icon" => "img/cartas/70_1_icon.png", "idolized_icon" => "img/cartas/70_2_icon.png", "pj_id" => 18
            // ],
            // [
            //     "nombre" => "The \"Good\" Me", "rareza" => 3, "atributo" => "cute", "unidolized" => "img/cartas/71_1.png", "idolized" => "img/cartas/71_2.png", "unidolized_icon" => "img/cartas/71_1_icon.png", "idolized_icon" => "img/cartas/71_2_icon.png", "pj_id" => 18
            // ],
            // [
            //     "nombre" => "Social Media Obsessed Artist", "rareza" => 1, "atributo" => "pure", "unidolized" => "img/cartas/73_1.png", "idolized" => "img/cartas/73_2.png", "unidolized_icon" => "img/cartas/73_1_icon.png", "idolized_icon" => "img/cartas/73_2_icon.png", "pj_id" => 19
            // ],
            // [
            //     "nombre" => "Nightcord at 25:00", "rareza" => 2, "atributo" => "mysterious", "unidolized" => "img/cartas/74_1.png", "idolized" => "img/cartas/74_2.png", "unidolized_icon" => "img/cartas/74_1_icon.png", "idolized_icon" => "img/cartas/74_2_icon.png", "pj_id" => 19
            // ],
            // [
            //     "nombre" => "The Best Angle", "rareza" => 3, "atributo" => "cool", "unidolized" => "img/cartas/75_1.png", "idolized" => "img/cartas/75_2.png", "unidolized_icon" => "img/cartas/75_1_icon.png", "idolized_icon" => "img/cartas/75_2_icon.png", "pj_id" => 19
            // ],
            // [
            //     "nombre" => "Obsessed With Cuteness", "rareza" => 1, "atributo" => "cute", "unidolized" => "img/cartas/77_1.png", "idolized" => "img/cartas/77_2.png", "unidolized_icon" => "img/cartas/77_1_icon.png", "idolized_icon" => "img/cartas/77_2_icon.png", "pj_id" => 20
            // ],
            // [
            //     "nombre" => "Nightcord at 25:00", "rareza" => 2, "atributo" => "cool", "unidolized" => "img/cartas/78_1.png", "idolized" => "img/cartas/78_2.png", "unidolized_icon" => "img/cartas/78_1_icon.png", "idolized_icon" => "img/cartas/78_2_icon.png", "pj_id" => 20
            // ],
            // [
            //     "nombre" => "Unyielding Obsession", "rareza" => 3, "atributo" => "mysterious", "unidolized" => "img/cartas/79_1.png", "idolized" => "img/cartas/79_2.png", "unidolized_icon" => "img/cartas/79_1_icon.png", "idolized_icon" => "img/cartas/79_2_icon.png", "pj_id" => 20
            // ],
            // [
            //     "nombre" => "Rainy Distance", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/109_1.png", "idolized" => "img/cartas/109_2.png", "unidolized_icon" => "img/cartas/109_1_icon.png", "idolized_icon" => "img/cartas/109_2_icon.png", "pj_id" => 2
            // ],
            // [
            //     "nombre" => "Recognizable Passion", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/111_1.png", "idolized" => "img/cartas/111_2.png", "unidolized_icon" => "img/cartas/111_1_icon.png", "idolized_icon" => "img/cartas/111_2_icon.png", "pj_id" => 4
            // ],
            // [
            //     "nombre" => "Rest Well", "rareza" => 3, "atributo" => "pure", "unidolized" => "img/cartas/112_1.png", "idolized" => "img/cartas/112_2.png", "unidolized_icon" => "img/cartas/112_1_icon.png", "idolized_icon" => "img/cartas/112_2_icon.png", "pj_id" => 3
            // ],
            // [
            //     "nombre" => "Starry Steps", "rareza" => 2, "atributo" => "pure", "unidolized" => "img/cartas/113_1.png", "idolized" => "img/cartas/113_2.png", "unidolized_icon" => "img/cartas/113_1_icon.png", "idolized_icon" => "img/cartas/113_2_icon.png", "pj_id" => 1
            // ],
            // [
            //     "nombre" => "Captive Masquerade", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/114_1.png", "idolized" => "img/cartas/114_2.png", "unidolized_icon" => "img/cartas/114_1_icon.png", "idolized_icon" => "img/cartas/114_2_icon.png", "pj_id" => 18
            // ],
            // [
            //     "nombre" => "Lifelike", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/115_1.png", "idolized" => "img/cartas/115_2.png", "unidolized_icon" => "img/cartas/115_1_icon.png", "idolized_icon" => "img/cartas/115_2_icon.png", "pj_id" => 17
            // ],
            // [
            //     "nombre" => "A Moment Of Jest", "rareza" => 3, "atributo" => "cute", "unidolized" => "img/cartas/117_1.png", "idolized" => "img/cartas/117_2.png", "unidolized_icon" => "img/cartas/117_1_icon.png", "idolized_icon" => "img/cartas/117_2_icon.png", "pj_id" => 20
            // ],
            // [
            //     "nombre" => "Marionette Dress", "rareza" => 2, "atributo" => "pure", "unidolized" => "img/cartas/118_1.png", "idolized" => "img/cartas/118_2.png", "unidolized_icon" => "img/cartas/118_1_icon.png", "idolized_icon" => "img/cartas/118_2_icon.png", "pj_id" => 19
            // ],
            // [
            //     "nombre" => "Unexpected Happenings", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/119_1.png", "idolized" => "img/cartas/119_2.png", "unidolized_icon" => "img/cartas/119_1_icon.png", "idolized_icon" => "img/cartas/119_2_icon.png", "pj_id" => 16
            // ],
            // [
            //     "nombre" => "Zombies?! Time To Panic!", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/120_1.png", "idolized" => "img/cartas/120_2.png", "unidolized_icon" => "img/cartas/120_1_icon.png", "idolized_icon" => "img/cartas/120_2_icon.png", "pj_id" => 13
            // ],
            // [
            //     "nombre" => "Panda Rider", "rareza" => 3, "atributo" => "mysterious", "unidolized" => "img/cartas/122_1.png", "idolized" => "img/cartas/122_2.png", "unidolized_icon" => "img/cartas/122_1_icon.png", "idolized_icon" => "img/cartas/122_2_icon.png", "pj_id" => 14
            // ],
            // [
            //     "nombre" => "Wonder Wand", "rareza" => 2, "atributo" => "mysterious", "unidolized" => "img/cartas/123_1.png", "idolized" => "img/cartas/123_2.png", "unidolized_icon" => "img/cartas/123_1_icon.png", "idolized_icon" => "img/cartas/123_2_icon.png", "pj_id" => 15
            // ],
            // [
            //     "nombre" => "Sprint! Relay Anchor☆", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/124_1.png", "idolized" => "img/cartas/124_2.png", "unidolized_icon" => "img/cartas/124_1_icon.png", "idolized_icon" => "img/cartas/124_2_icon.png", "pj_id" => 14
            // ],
            // [
            //     "nombre" => "Blessings Abound", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/125_1.png", "idolized" => "img/cartas/125_2.png", "unidolized_icon" => "img/cartas/125_1_icon.png", "idolized_icon" => "img/cartas/125_2_icon.png", "pj_id" => 6
            // ],
            // [
            //     "nombre" => "Super Exciting Three-Legged Race?", "rareza" => 3, "atributo" => "happy", "unidolized" => "img/cartas/127_1.png", "idolized" => "img/cartas/127_2.png", "unidolized_icon" => "img/cartas/127_1_icon.png", "idolized_icon" => "img/cartas/127_2_icon.png", "pj_id" => 18
            // ],
            // [
            //     "nombre" => "Sports Festival Committee!", "rareza" => 2, "atributo" => "cool", "unidolized" => "img/cartas/128_1.png", "idolized" => "img/cartas/128_2.png", "unidolized_icon" => "img/cartas/128_1_icon.png", "idolized_icon" => "img/cartas/128_2_icon.png", "pj_id" => 2
            // ],
            // [
            //     "nombre" => "Always Looking Ahead", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/129_1.png", "idolized" => "img/cartas/129_2.png", "unidolized_icon" => "img/cartas/129_1_icon.png", "idolized_icon" => "img/cartas/129_2_icon.png", "pj_id" => 7
            // ],
            // [
            //     "nombre" => "Wh-Wh-Wh-What?!", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/130_1.png", "idolized" => "img/cartas/130_2.png", "unidolized_icon" => "img/cartas/130_1_icon.png", "idolized_icon" => "img/cartas/130_2_icon.png", "pj_id" => 5
            // ],
            // [
            //     "nombre" => "What I Want To Become", "rareza" => 3, "atributo" => "cool", "unidolized" => "img/cartas/132_1.png", "idolized" => "img/cartas/132_2.png", "unidolized_icon" => "img/cartas/132_1_icon.png", "idolized_icon" => "img/cartas/132_2_icon.png", "pj_id" => 8
            // ],
            // [
            //     "nombre" => "Bubbly Blue", "rareza" => 2, "atributo" => "happy", "unidolized" => "img/cartas/133_1.png", "idolized" => "img/cartas/133_2.png", "unidolized_icon" => "img/cartas/133_1_icon.png", "idolized_icon" => "img/cartas/133_2_icon.png", "pj_id" => 6
            // ],
            // [
            //     "nombre" => "Despite Being Partners", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/134_1.png", "idolized" => "img/cartas/134_2.png", "unidolized_icon" => "img/cartas/134_1_icon.png", "idolized_icon" => "img/cartas/134_2_icon.png", "pj_id" => 10
            // ],
            // [
            //     "nombre" => "Once More, Together", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/135_1.png", "idolized" => "img/cartas/135_2.png", "unidolized_icon" => "img/cartas/135_1_icon.png", "idolized_icon" => "img/cartas/135_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "Because We're Partners", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/136_1.png", "idolized" => "img/cartas/136_2.png", "unidolized_icon" => "img/cartas/136_1_icon.png", "idolized_icon" => "img/cartas/136_2_icon.png", "pj_id" => 11
            // ],
            // [
            //     "nombre" => "Relaxing Cafe Break", "rareza" => 3, "atributo" => "happy", "unidolized" => "img/cartas/137_1.png", "idolized" => "img/cartas/137_2.png", "unidolized_icon" => "img/cartas/137_1_icon.png", "idolized_icon" => "img/cartas/137_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "Rooftop Friendship", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/139_1.png", "idolized" => "img/cartas/139_2.png", "unidolized_icon" => "img/cartas/139_1_icon.png", "idolized_icon" => "img/cartas/139_2_icon.png", "pj_id" => 20
            // ],
            // [
            //     "nombre" => "I'm The Lead!", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/141_1.png", "idolized" => "img/cartas/141_2.png", "unidolized_icon" => "img/cartas/141_1_icon.png", "idolized_icon" => "img/cartas/141_2_icon.png", "pj_id" => 13
            // ],
            // [
            //     "nombre" => "Animal Cotton Candy♪", "rareza" => 3, "atributo" => "mysterious", "unidolized" => "img/cartas/142_1.png", "idolized" => "img/cartas/142_2.png", "unidolized_icon" => "img/cartas/142_1_icon.png", "idolized_icon" => "img/cartas/142_2_icon.png", "pj_id" => 15
            // ],
            // [
            //     "nombre" => "Unexpected Talent?", "rareza" => 2, "atributo" => "cool", "unidolized" => "img/cartas/143_1.png", "idolized" => "img/cartas/143_2.png", "unidolized_icon" => "img/cartas/143_1_icon.png", "idolized_icon" => "img/cartas/143_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "Gift From Above", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/144_1.png", "idolized" => "img/cartas/144_2.png", "unidolized_icon" => "img/cartas/144_1_icon.png", "idolized_icon" => "img/cartas/144_2_icon.png", "pj_id" => 15
            // ],
            // [
            //     "nombre" => "Sound Sleep", "rareza" => 3, "atributo" => "pure", "unidolized" => "img/cartas/147_1.png", "idolized" => "img/cartas/147_2.png", "unidolized_icon" => "img/cartas/147_1_icon.png", "idolized_icon" => "img/cartas/147_2_icon.png", "pj_id" => 16
            // ],
            // [
            //     "nombre" => "Reindeer Headband☆", "rareza" => 2, "atributo" => "cute", "unidolized" => "img/cartas/148_1.png", "idolized" => "img/cartas/148_2.png", "unidolized_icon" => "img/cartas/148_1_icon.png", "idolized_icon" => "img/cartas/148_2_icon.png", "pj_id" => 14
            // ],
            // [
            //     "nombre" => "New Year's At The Shinonomes", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/152_1.png", "idolized" => "img/cartas/152_2.png", "unidolized_icon" => "img/cartas/152_1_icon.png", "idolized_icon" => "img/cartas/152_2_icon.png", "pj_id" => 19
            // ],
            // [
            //     "nombre" => "Most Important Wish", "rareza" => 3, "atributo" => "cute", "unidolized" => "img/cartas/153_1.png", "idolized" => "img/cartas/153_2.png", "unidolized_icon" => "img/cartas/153_1_icon.png", "idolized_icon" => "img/cartas/153_2_icon.png", "pj_id" => 2
            // ],
            // [
            //     "nombre" => "New Year's With All", "rareza" => 2, "atributo" => "pure", "unidolized" => "img/cartas/154_1.png", "idolized" => "img/cartas/154_2.png", "unidolized_icon" => "img/cartas/154_1_icon.png", "idolized_icon" => "img/cartas/154_2_icon.png", "pj_id" => 13
            // ],
            // [
            //     "nombre" => "Grateful For Courage", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/155_1.png", "idolized" => "img/cartas/155_2.png", "unidolized_icon" => "img/cartas/155_1_icon.png", "idolized_icon" => "img/cartas/155_2_icon.png", "pj_id" => 3
            // ],
            // [
            //     "nombre" => "Smiling Once More", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/157_1.png", "idolized" => "img/cartas/157_2.png", "unidolized_icon" => "img/cartas/157_1_icon.png", "idolized_icon" => "img/cartas/157_2_icon.png", "pj_id" => 1
            // ],
            // [
            //     "nombre" => "Unseen Assistance", "rareza" => 3, "atributo" => "mysterious", "unidolized" => "img/cartas/158_1.png", "idolized" => "img/cartas/158_2.png", "unidolized_icon" => "img/cartas/158_1_icon.png", "idolized_icon" => "img/cartas/158_2_icon.png", "pj_id" => 2
            // ],
            // [
            //     "nombre" => "Varied Kindness", "rareza" => 2, "atributo" => "cute", "unidolized" => "img/cartas/159_1.png", "idolized" => "img/cartas/159_2.png", "unidolized_icon" => "img/cartas/159_1_icon.png", "idolized_icon" => "img/cartas/159_2_icon.png", "pj_id" => 4
            // ],
            // [
            //     "nombre" => "I'm Not Just Anyone, I'm \"Me\"", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/160_1.png", "idolized" => "img/cartas/160_2.png", "unidolized_icon" => "img/cartas/160_1_icon.png", "idolized_icon" => "img/cartas/160_2_icon.png", "pj_id" => 8
            // ],
            // [
            //     "nombre" => "Sweet Moment", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/162_1.png", "idolized" => "img/cartas/162_2.png", "unidolized_icon" => "img/cartas/162_1_icon.png", "idolized_icon" => "img/cartas/162_2_icon.png", "pj_id" => 7
            // ],
            // [
            //     "nombre" => "An Idol's Duty", "rareza" => 3, "atributo" => "cute", "unidolized" => "img/cartas/163_1.png", "idolized" => "img/cartas/163_2.png", "unidolized_icon" => "img/cartas/163_1_icon.png", "idolized_icon" => "img/cartas/163_2_icon.png", "pj_id" => 6
            // ],
            // [
            //     "nombre" => "Positive Flower", "rareza" => 2, "atributo" => "pure", "unidolized" => "img/cartas/164_1.png", "idolized" => "img/cartas/164_2.png", "unidolized_icon" => "img/cartas/164_1_icon.png", "idolized_icon" => "img/cartas/164_2_icon.png", "pj_id" => 5
            // ],
            // [
            //     "nombre" => "Maybe Someday", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/165_1.png", "idolized" => "img/cartas/165_2.png", "unidolized_icon" => "img/cartas/165_1_icon.png", "idolized_icon" => "img/cartas/165_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "Waiting For You", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/166_1.png", "idolized" => "img/cartas/166_2.png", "unidolized_icon" => "img/cartas/166_1_icon.png", "idolized_icon" => "img/cartas/166_2_icon.png", "pj_id" => 11
            // ],
            // [
            //     "nombre" => "Intimate Feeling", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/167_1.png", "idolized" => "img/cartas/167_2.png", "unidolized_icon" => "img/cartas/167_1_icon.png", "idolized_icon" => "img/cartas/167_2_icon.png", "pj_id" => 10
            // ],
            // [
            //     "nombre" => "Gloomy Night", "rareza" => 3, "atributo" => "pure", "unidolized" => "img/cartas/168_1.png", "idolized" => "img/cartas/168_2.png", "unidolized_icon" => "img/cartas/168_1_icon.png", "idolized_icon" => "img/cartas/168_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "Bonds And Grief", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/170_1.png", "idolized" => "img/cartas/170_2.png", "unidolized_icon" => "img/cartas/170_1_icon.png", "idolized_icon" => "img/cartas/170_2_icon.png", "pj_id" => 4
            // ],
            // [
            //     "nombre" => "Welcome To The Nightmare", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/172_1.png", "idolized" => "img/cartas/172_2.png", "unidolized_icon" => "img/cartas/172_1_icon.png", "idolized_icon" => "img/cartas/172_2_icon.png", "pj_id" => 3
            // ],
            // [
            //     "nombre" => "I'll Introduce You!", "rareza" => 3, "atributo" => "cool", "unidolized" => "img/cartas/173_1.png", "idolized" => "img/cartas/173_2.png", "unidolized_icon" => "img/cartas/173_1_icon.png", "idolized_icon" => "img/cartas/173_2_icon.png", "pj_id" => 13
            // ],
            // [
            //     "nombre" => "Beastly Madness", "rareza" => 2, "atributo" => "cool", "unidolized" => "img/cartas/174_1.png", "idolized" => "img/cartas/174_2.png", "unidolized_icon" => "img/cartas/174_1_icon.png", "idolized_icon" => "img/cartas/174_2_icon.png", "pj_id" => 16
            // ],
            // [
            //     "nombre" => "I Don't Want To Give Up", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/175_1.png", "idolized" => "img/cartas/175_2.png", "unidolized_icon" => "img/cartas/175_1_icon.png", "idolized_icon" => "img/cartas/175_2_icon.png", "pj_id" => 19
            // ],
            // [
            //     "nombre" => "Thrown Words", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/176_1.png", "idolized" => "img/cartas/176_2.png", "unidolized_icon" => "img/cartas/176_1_icon.png", "idolized_icon" => "img/cartas/176_2_icon.png", "pj_id" => 18
            // ],
            // [
            //     "nombre" => "From Feeling To Melody", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/177_1.png", "idolized" => "img/cartas/177_2.png", "unidolized_icon" => "img/cartas/177_1_icon.png", "idolized_icon" => "img/cartas/177_2_icon.png", "pj_id" => 17
            // ],
            // [
            //     "nombre" => "Trust You", "rareza" => 2, "atributo" => "mysterious", "unidolized" => "img/cartas/179_1.png", "idolized" => "img/cartas/179_2.png", "unidolized_icon" => "img/cartas/179_1_icon.png", "idolized_icon" => "img/cartas/179_2_icon.png", "pj_id" => 20
            // ],
            // [
            //     "nombre" => "An Irreplaceable Smile", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/180_1.png", "idolized" => "img/cartas/180_2.png", "unidolized_icon" => "img/cartas/180_1_icon.png", "idolized_icon" => "img/cartas/180_2_icon.png", "pj_id" => 14
            // ],
            // [
            //     "nombre" => "Messenger Of Feelings", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/181_1.png", "idolized" => "img/cartas/181_2.png", "unidolized_icon" => "img/cartas/181_1_icon.png", "idolized_icon" => "img/cartas/181_2_icon.png", "pj_id" => 15
            // ],
            // [
            //     "nombre" => "The Fire Within", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/182_1.png", "idolized" => "img/cartas/182_2.png", "unidolized_icon" => "img/cartas/182_1_icon.png", "idolized_icon" => "img/cartas/182_2_icon.png", "pj_id" => 16
            // ],
            // [
            //     "nombre" => "Balloon Presenter", "rareza" => 2, "atributo" => "happy", "unidolized" => "img/cartas/184_1.png", "idolized" => "img/cartas/184_2.png", "unidolized_icon" => "img/cartas/184_1_icon.png", "idolized_icon" => "img/cartas/184_2_icon.png", "pj_id" => 13
            // ],
            // [
            //     "nombre" => "The Best Doll Festival!", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/185_1.png", "idolized" => "img/cartas/185_2.png", "unidolized_icon" => "img/cartas/185_1_icon.png", "idolized_icon" => "img/cartas/185_2_icon.png", "pj_id" => 2
            // ],
            // [
            //     "nombre" => "Big Brother's Agony", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/186_1.png", "idolized" => "img/cartas/186_2.png", "unidolized_icon" => "img/cartas/186_1_icon.png", "idolized_icon" => "img/cartas/186_2_icon.png", "pj_id" => 13
            // ],
            // [
            //     "nombre" => "A Bond Between Siblings", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/187_1.png", "idolized" => "img/cartas/187_2.png", "unidolized_icon" => "img/cartas/187_1_icon.png", "idolized_icon" => "img/cartas/187_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "Even Though I Shouldn't...", "rareza" => 2, "atributo" => "mysterious", "unidolized" => "img/cartas/189_1.png", "idolized" => "img/cartas/189_2.png", "unidolized_icon" => "img/cartas/189_1_icon.png", "idolized_icon" => "img/cartas/189_2_icon.png", "pj_id" => 3
            // ],
            // [
            //     "nombre" => "For \"Your\" Sake", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/190_1.png", "idolized" => "img/cartas/190_2.png", "unidolized_icon" => "img/cartas/190_1_icon.png", "idolized_icon" => "img/cartas/190_2_icon.png", "pj_id" => 5
            // ],
            // [
            //     "nombre" => "You Deserve It", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/191_1.png", "idolized" => "img/cartas/191_2.png", "unidolized_icon" => "img/cartas/191_1_icon.png", "idolized_icon" => "img/cartas/191_2_icon.png", "pj_id" => 6
            // ],
            // [
            //     "nombre" => "Meeoow~?", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/192_1.png", "idolized" => "img/cartas/192_2.png", "unidolized_icon" => "img/cartas/192_1_icon.png", "idolized_icon" => "img/cartas/192_2_icon.png", "pj_id" => 8
            // ],
            // [
            //     "nombre" => "What I Can Do For Them", "rareza" => 2, "atributo" => "happy", "unidolized" => "img/cartas/194_1.png", "idolized" => "img/cartas/194_2.png", "unidolized_icon" => "img/cartas/194_1_icon.png", "idolized_icon" => "img/cartas/194_2_icon.png", "pj_id" => 7
            // ],
            // [
            //     "nombre" => "The Dream I Saw Will One Day", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/195_1.png", "idolized" => "img/cartas/195_2.png", "unidolized_icon" => "img/cartas/195_1_icon.png", "idolized_icon" => "img/cartas/195_2_icon.png", "pj_id" => 17
            // ],
            // [
            //     "nombre" => "Dive Into Me", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/196_1.png", "idolized" => "img/cartas/196_2.png", "unidolized_icon" => "img/cartas/196_1_icon.png", "idolized_icon" => "img/cartas/196_2_icon.png", "pj_id" => 18
            // ],
            // [
            //     "nombre" => "Hoping For Clear Skies", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/197_1.png", "idolized" => "img/cartas/197_2.png", "unidolized_icon" => "img/cartas/197_1_icon.png", "idolized_icon" => "img/cartas/197_2_icon.png", "pj_id" => 1
            // ],
            // [
            //     "nombre" => "Chasing After Everyone", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/199_1.png", "idolized" => "img/cartas/199_2.png", "unidolized_icon" => "img/cartas/199_1_icon.png", "idolized_icon" => "img/cartas/199_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "Expanding Circle Of Friendship", "rareza" => 3, "atributo" => "cool", "unidolized" => "img/cartas/200_1.png", "idolized" => "img/cartas/200_2.png", "unidolized_icon" => "img/cartas/200_1_icon.png", "idolized_icon" => "img/cartas/200_2_icon.png", "pj_id" => 5
            // ],
            // [
            //     "nombre" => "This Spring, With You...", "rareza" => 2, "atributo" => "cool", "unidolized" => "img/cartas/201_1.png", "idolized" => "img/cartas/201_2.png", "unidolized_icon" => "img/cartas/201_1_icon.png", "idolized_icon" => "img/cartas/201_2_icon.png", "pj_id" => 17
            // ],
            // [
            //     "nombre" => "Feelings That I've Realized", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/202_1.png", "idolized" => "img/cartas/202_2.png", "unidolized_icon" => "img/cartas/202_1_icon.png", "idolized_icon" => "img/cartas/202_2_icon.png", "pj_id" => 20
            // ],
            // [
            //     "nombre" => "Mystery Tour Baptism?", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/204_1.png", "idolized" => "img/cartas/204_2.png", "unidolized_icon" => "img/cartas/204_1_icon.png", "idolized_icon" => "img/cartas/204_2_icon.png", "pj_id" => 19
            // ],
            // [
            //     "nombre" => "Ephemerality And Beauty", "rareza" => 3, "atributo" => "pure", "unidolized" => "img/cartas/205_1.png", "idolized" => "img/cartas/205_2.png", "unidolized_icon" => "img/cartas/205_1_icon.png", "idolized_icon" => "img/cartas/205_2_icon.png", "pj_id" => 17
            // ],
            // [
            //     "nombre" => "Encounter At A Closed School", "rareza" => 2, "atributo" => "pure", "unidolized" => "img/cartas/206_1.png", "idolized" => "img/cartas/206_2.png", "unidolized_icon" => "img/cartas/206_1_icon.png", "idolized_icon" => "img/cartas/206_2_icon.png", "pj_id" => 18
            // ],
            // [
            //     "nombre" => "The Answer I Found", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/207_1.png", "idolized" => "img/cartas/207_2.png", "unidolized_icon" => "img/cartas/207_1_icon.png", "idolized_icon" => "img/cartas/207_2_icon.png", "pj_id" => 4
            // ],
            // [
            //     "nombre" => "Unseen Feelings", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/208_1.png", "idolized" => "img/cartas/208_2.png", "unidolized_icon" => "img/cartas/208_1_icon.png", "idolized_icon" => "img/cartas/208_2_icon.png", "pj_id" => 3
            // ],
            // [
            //     "nombre" => "Chatting By The Window", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/209_1.png", "idolized" => "img/cartas/209_2.png", "unidolized_icon" => "img/cartas/209_1_icon.png", "idolized_icon" => "img/cartas/209_2_icon.png", "pj_id" => 2
            // ],
            // [
            //     "nombre" => "My Feelings, Your Heart", "rareza" => 3, "atributo" => "happy", "unidolized" => "img/cartas/210_1.png", "idolized" => "img/cartas/210_2.png", "unidolized_icon" => "img/cartas/210_1_icon.png", "idolized_icon" => "img/cartas/210_2_icon.png", "pj_id" => 1
            // ],
            // [
            //     "nombre" => "A Night Of Defeat", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/212_1.png", "idolized" => "img/cartas/212_2.png", "unidolized_icon" => "img/cartas/212_1_icon.png", "idolized_icon" => "img/cartas/212_2_icon.png", "pj_id" => 11
            // ],
            // [
            //     "nombre" => "Because We're Teammates", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/213_1.png", "idolized" => "img/cartas/213_2.png", "unidolized_icon" => "img/cartas/213_1_icon.png", "idolized_icon" => "img/cartas/213_2_icon.png", "pj_id" => 10
            // ],
            // [
            //     "nombre" => "Wanting To Grow Together", "rareza" => 3, "atributo" => "mysterious", "unidolized" => "img/cartas/215_1.png", "idolized" => "img/cartas/215_2.png", "unidolized_icon" => "img/cartas/215_1_icon.png", "idolized_icon" => "img/cartas/215_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "As Your Partner", "rareza" => 2, "atributo" => "cute", "unidolized" => "img/cartas/216_1.png", "idolized" => "img/cartas/216_2.png", "unidolized_icon" => "img/cartas/216_1_icon.png", "idolized_icon" => "img/cartas/216_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "Outstretched Hand", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/217_1.png", "idolized" => "img/cartas/217_2.png", "unidolized_icon" => "img/cartas/217_1_icon.png", "idolized_icon" => "img/cartas/217_2_icon.png", "pj_id" => 19
            // ],
            // [
            //     "nombre" => "Unyielding Indomitable Spirit", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/218_1.png", "idolized" => "img/cartas/218_2.png", "unidolized_icon" => "img/cartas/218_1_icon.png", "idolized_icon" => "img/cartas/218_2_icon.png", "pj_id" => 7
            // ],
            // [
            //     "nombre" => "Between Feelings And Reality", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/219_1.png", "idolized" => "img/cartas/219_2.png", "unidolized_icon" => "img/cartas/219_1_icon.png", "idolized_icon" => "img/cartas/219_2_icon.png", "pj_id" => 20
            // ],
            // [
            //     "nombre" => "Runaway Thought Process", "rareza" => 3, "atributo" => "cute", "unidolized" => "img/cartas/220_1.png", "idolized" => "img/cartas/220_2.png", "unidolized_icon" => "img/cartas/220_1_icon.png", "idolized_icon" => "img/cartas/220_2_icon.png", "pj_id" => 16
            // ],
            // [
            //     "nombre" => "In The Face Of \"What I Love\"", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/222_1.png", "idolized" => "img/cartas/222_2.png", "unidolized_icon" => "img/cartas/222_1_icon.png", "idolized_icon" => "img/cartas/222_2_icon.png", "pj_id" => 6
            // ],
            // [
            //     "nombre" => "An Invitation To Relax", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/223_1.png", "idolized" => "img/cartas/223_2.png", "unidolized_icon" => "img/cartas/223_1_icon.png", "idolized_icon" => "img/cartas/223_2_icon.png", "pj_id" => 8
            // ],
            // [
            //     "nombre" => "Passionate Call!", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/224_1.png", "idolized" => "img/cartas/224_2.png", "unidolized_icon" => "img/cartas/224_1_icon.png", "idolized_icon" => "img/cartas/224_2_icon.png", "pj_id" => 5
            // ],
            // [
            //     "nombre" => "Perfect Sweets", "rareza" => 2, "atributo" => "cool", "unidolized" => "img/cartas/226_1.png", "idolized" => "img/cartas/226_2.png", "unidolized_icon" => "img/cartas/226_1_icon.png", "idolized_icon" => "img/cartas/226_2_icon.png", "pj_id" => 7
            // ],
            // [
            //     "nombre" => "A Love Song Dedicated To You", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/227_1.png", "idolized" => "img/cartas/227_2.png", "unidolized_icon" => "img/cartas/227_1_icon.png", "idolized_icon" => "img/cartas/227_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "Fantastic Planner", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/228_1.png", "idolized" => "img/cartas/228_2.png", "unidolized_icon" => "img/cartas/228_1_icon.png", "idolized_icon" => "img/cartas/228_2_icon.png", "pj_id" => 16
            // ],
            // [
            //     "nombre" => "Bask In Happiness", "rareza" => 3, "atributo" => "cool", "unidolized" => "img/cartas/230_1.png", "idolized" => "img/cartas/230_2.png", "unidolized_icon" => "img/cartas/230_1_icon.png", "idolized_icon" => "img/cartas/230_2_icon.png", "pj_id" => 11
            // ],
            // [
            //     "nombre" => "Last-Minute Dancer", "rareza" => 2, "atributo" => "happy", "unidolized" => "img/cartas/231_1.png", "idolized" => "img/cartas/231_2.png", "unidolized_icon" => "img/cartas/231_1_icon.png", "idolized_icon" => "img/cartas/231_2_icon.png", "pj_id" => 10
            // ],
            // [
            //     "nombre" => "The Outcome Of My Choice", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/232_1.png", "idolized" => "img/cartas/232_2.png", "unidolized_icon" => "img/cartas/232_1_icon.png", "idolized_icon" => "img/cartas/232_2_icon.png", "pj_id" => 13
            // ],
            // [
            //     "nombre" => "Our Feelings Become One", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/233_1.png", "idolized" => "img/cartas/233_2.png", "unidolized_icon" => "img/cartas/233_1_icon.png", "idolized_icon" => "img/cartas/233_2_icon.png", "pj_id" => 14
            // ],
            // [
            //     "nombre" => "The Confidence You Gave Me", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/234_1.png", "idolized" => "img/cartas/234_2.png", "unidolized_icon" => "img/cartas/234_1_icon.png", "idolized_icon" => "img/cartas/234_2_icon.png", "pj_id" => 15
            // ],
            // [
            //     "nombre" => "Flowerbed of Memories", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/237_1.png", "idolized" => "img/cartas/237_2.png", "unidolized_icon" => "img/cartas/237_1_icon.png", "idolized_icon" => "img/cartas/237_2_icon.png", "pj_id" => 17
            // ],
            // [
            //     "nombre" => "Break Into A Smile", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/239_1.png", "idolized" => "img/cartas/239_2.png", "unidolized_icon" => "img/cartas/239_1_icon.png", "idolized_icon" => "img/cartas/239_2_icon.png", "pj_id" => 18
            // ],
            // [
            //     "nombre" => "Taking A Lost Hand", "rareza" => 3, "atributo" => "cool", "unidolized" => "img/cartas/240_1.png", "idolized" => "img/cartas/240_2.png", "unidolized_icon" => "img/cartas/240_1_icon.png", "idolized_icon" => "img/cartas/240_2_icon.png", "pj_id" => 20
            // ],
            // [
            //     "nombre" => "Please, Put It Into Words", "rareza" => 2, "atributo" => "cute", "unidolized" => "img/cartas/241_1.png", "idolized" => "img/cartas/241_2.png", "unidolized_icon" => "img/cartas/241_1_icon.png", "idolized_icon" => "img/cartas/241_2_icon.png", "pj_id" => 19
            // ],
            // [
            //     "nombre" => "Someday, I'll Deliver", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/242_1.png", "idolized" => "img/cartas/242_2.png", "unidolized_icon" => "img/cartas/242_1_icon.png", "idolized_icon" => "img/cartas/242_2_icon.png", "pj_id" => 6
            // ],
            // [
            //     "nombre" => "To You Who Wants To Be An Idol", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/243_1.png", "idolized" => "img/cartas/243_2.png", "unidolized_icon" => "img/cartas/243_1_icon.png", "idolized_icon" => "img/cartas/243_2_icon.png", "pj_id" => 7
            // ],
            // [
            //     "nombre" => "The Feelings We've Realized", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/244_1.png", "idolized" => "img/cartas/244_2.png", "unidolized_icon" => "img/cartas/244_1_icon.png", "idolized_icon" => "img/cartas/244_2_icon.png", "pj_id" => 2
            // ],
            // [
            //     "nombre" => "Lunchtime Chat", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/246_1.png", "idolized" => "img/cartas/246_2.png", "unidolized_icon" => "img/cartas/246_1_icon.png", "idolized_icon" => "img/cartas/246_2_icon.png", "pj_id" => 4
            // ],
            // [
            //     "nombre" => "Thinking About Friends", "rareza" => 3, "atributo" => "cool", "unidolized" => "img/cartas/247_1.png", "idolized" => "img/cartas/247_2.png", "unidolized_icon" => "img/cartas/247_1_icon.png", "idolized_icon" => "img/cartas/247_2_icon.png", "pj_id" => 3
            // ],
            // [
            //     "nombre" => "An Umbrella Waiting For Clear Skies", "rareza" => 2, "atributo" => "cute", "unidolized" => "img/cartas/248_1.png", "idolized" => "img/cartas/248_2.png", "unidolized_icon" => "img/cartas/248_1_icon.png", "idolized_icon" => "img/cartas/248_2_icon.png", "pj_id" => 1
            // ],
            // [
            //     "nombre" => "Awakening My Inner Strength", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/249_1.png", "idolized" => "img/cartas/249_2.png", "unidolized_icon" => "img/cartas/249_1_icon.png", "idolized_icon" => "img/cartas/249_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "Words For My Partner", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/250_1.png", "idolized" => "img/cartas/250_2.png", "unidolized_icon" => "img/cartas/250_1_icon.png", "idolized_icon" => "img/cartas/250_2_icon.png", "pj_id" => 10
            // ],
            // [
            //     "nombre" => "Respect For My Teammates", "rareza" => 3, "atributo" => "pure", "unidolized" => "img/cartas/252_1.png", "idolized" => "img/cartas/252_2.png", "unidolized_icon" => "img/cartas/252_1_icon.png", "idolized_icon" => "img/cartas/252_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "Unchanging Summer Festival", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/254_1.png", "idolized" => "img/cartas/254_2.png", "unidolized_icon" => "img/cartas/254_1_icon.png", "idolized_icon" => "img/cartas/254_2_icon.png", "pj_id" => 11
            // ],
            // [
            //     "nombre" => "Distant Summer Festival", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/255_1.png", "idolized" => "img/cartas/255_2.png", "unidolized_icon" => "img/cartas/255_1_icon.png", "idolized_icon" => "img/cartas/255_2_icon.png", "pj_id" => 19
            // ],
            // [
            //     "nombre" => "That's So Unfair!", "rareza" => 3, "atributo" => "happy", "unidolized" => "img/cartas/257_1.png", "idolized" => "img/cartas/257_2.png", "unidolized_icon" => "img/cartas/257_1_icon.png", "idolized_icon" => "img/cartas/257_2_icon.png", "pj_id" => 7
            // ],
            // [
            //     "nombre" => "Summer Night Festival", "rareza" => 2, "atributo" => "happy", "unidolized" => "img/cartas/258_1.png", "idolized" => "img/cartas/258_2.png", "unidolized_icon" => "img/cartas/258_1_icon.png", "idolized_icon" => "img/cartas/258_2_icon.png", "pj_id" => 20
            // ],
            // [
            //     "nombre" => "Swimming Lessons in the Sea", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/259_1.png", "idolized" => "img/cartas/259_2.png", "unidolized_icon" => "img/cartas/259_1_icon.png", "idolized_icon" => "img/cartas/259_2_icon.png", "pj_id" => 3
            // ],
            // [
            //     "nombre" => "Magic Show Assistant!", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/260_1.png", "idolized" => "img/cartas/260_2.png", "unidolized_icon" => "img/cartas/260_1_icon.png", "idolized_icon" => "img/cartas/260_2_icon.png", "pj_id" => 2
            // ],
            // [
            //     "nombre" => "The Barbeque Magistrate?!", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/261_1.png", "idolized" => "img/cartas/261_2.png", "unidolized_icon" => "img/cartas/261_1_icon.png", "idolized_icon" => "img/cartas/261_2_icon.png", "pj_id" => 14
            // ],
            // [
            //     "nombre" => "Sea Glass Full Of Feelings", "rareza" => 2, "atributo" => "cool", "unidolized" => "img/cartas/263_1.png", "idolized" => "img/cartas/263_2.png", "unidolized_icon" => "img/cartas/263_1_icon.png", "idolized_icon" => "img/cartas/263_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "Full Power! Happy Everyday!", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/264_1.png", "idolized" => "img/cartas/264_2.png", "unidolized_icon" => "img/cartas/264_1_icon.png", "idolized_icon" => "img/cartas/264_2_icon.png", "pj_id" => 7
            // ],
            // [
            //     "nombre" => "Together With Our Little Fans", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/266_1.png", "idolized" => "img/cartas/266_2.png", "unidolized_icon" => "img/cartas/266_1_icon.png", "idolized_icon" => "img/cartas/266_2_icon.png", "pj_id" => 6
            // ],
            // [
            //     "nombre" => "Secret Negotiation", "rareza" => 3, "atributo" => "cute", "unidolized" => "img/cartas/267_1.png", "idolized" => "img/cartas/267_2.png", "unidolized_icon" => "img/cartas/267_1_icon.png", "idolized_icon" => "img/cartas/267_2_icon.png", "pj_id" => 8
            // ],
            // [
            //     "nombre" => "The Hasty Messenger", "rareza" => 2, "atributo" => "mysterious", "unidolized" => "img/cartas/268_1.png", "idolized" => "img/cartas/268_2.png", "unidolized_icon" => "img/cartas/268_1_icon.png", "idolized_icon" => "img/cartas/268_2_icon.png", "pj_id" => 5
            // ],
            // [
            //     "nombre" => "Celebrate With Fireworks", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/269_1.png", "idolized" => "img/cartas/269_2.png", "unidolized_icon" => "img/cartas/269_1_icon.png", "idolized_icon" => "img/cartas/269_2_icon.png", "pj_id" => 15
            // ],
            // [
            //     "nombre" => "Backstage Alchemist", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/270_1.png", "idolized" => "img/cartas/270_2.png", "unidolized_icon" => "img/cartas/270_1_icon.png", "idolized_icon" => "img/cartas/270_2_icon.png", "pj_id" => 16
            // ],
            // [
            //     "nombre" => "The Smiles I Want to Protect", "rareza" => 2, "atributo" => "happy", "unidolized" => "img/cartas/273_1.png", "idolized" => "img/cartas/273_2.png", "unidolized_icon" => "img/cartas/273_1_icon.png", "idolized_icon" => "img/cartas/273_2_icon.png", "pj_id" => 14
            // ],
            // [
            //     "nombre" => "The Same Dango As That Day", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/274_1.png", "idolized" => "img/cartas/274_2.png", "unidolized_icon" => "img/cartas/274_1_icon.png", "idolized_icon" => "img/cartas/274_2_icon.png", "pj_id" => 8
            // ],
            // [
            //     "nombre" => "What Made My Sadness Go Away", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/275_1.png", "idolized" => "img/cartas/275_2.png", "unidolized_icon" => "img/cartas/275_1_icon.png", "idolized_icon" => "img/cartas/275_2_icon.png", "pj_id" => 4
            // ],
            // [
            //     "nombre" => "Looking Up At The Same Moon", "rareza" => 2, "atributo" => "cute", "unidolized" => "img/cartas/278_1.png", "idolized" => "img/cartas/278_2.png", "unidolized_icon" => "img/cartas/278_1_icon.png", "idolized_icon" => "img/cartas/278_2_icon.png", "pj_id" => 18
            // ],
            [
                "nombre" => "Star Piece Connection", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/279_1.png", "idolized" => "img/cartas/279_2.png", "unidolized_icon" => "img/cartas/279_1_icon.png", "idolized_icon" => "img/cartas/279_2_icon.png", "pj_id" => 1
            ],
            [
                "nombre" => "Figuring Out What I Can Do", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/281_1.png", "idolized" => "img/cartas/281_2.png", "unidolized_icon" => "img/cartas/281_1_icon.png", "idolized_icon" => "img/cartas/281_2_icon.png", "pj_id" => 3
            ],
            [
                "nombre" => "We're Doing A Debrief Right After", "rareza" => 3, "atributo" => "pure", "unidolized" => "img/cartas/282_1.png", "idolized" => "img/cartas/282_2.png", "unidolized_icon" => "img/cartas/282_1_icon.png", "idolized_icon" => "img/cartas/282_2_icon.png", "pj_id" => 4
            ],
            [
                "nombre" => "Cookie Cheer", "rareza" => 2, "atributo" => "mysterious", "unidolized" => "img/cartas/283_1.png", "idolized" => "img/cartas/283_2.png", "unidolized_icon" => "img/cartas/283_1_icon.png", "idolized_icon" => "img/cartas/283_2_icon.png", "pj_id" => 2
            ],
            [
                "nombre" => "Memories Of Warm Affection", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/284_1.png", "idolized" => "img/cartas/284_2.png", "unidolized_icon" => "img/cartas/284_1_icon.png", "idolized_icon" => "img/cartas/284_2_icon.png", "pj_id" => 18
            ],
            [
                "nombre" => "A Moment's Rest", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/285_1.png", "idolized" => "img/cartas/285_2.png", "unidolized_icon" => "img/cartas/285_1_icon.png", "idolized_icon" => "img/cartas/285_2_icon.png", "pj_id" => 20
            ],
            [
                "nombre" => "A Cancelled Message", "rareza" => 3, "atributo" => "cute", "unidolized" => "img/cartas/287_1.png", "idolized" => "img/cartas/287_2.png", "unidolized_icon" => "img/cartas/287_1_icon.png", "idolized_icon" => "img/cartas/287_2_icon.png", "pj_id" => 19
            ],
            [
                "nombre" => "Awkward Tea Time", "rareza" => 2, "atributo" => "pure", "unidolized" => "img/cartas/288_1.png", "idolized" => "img/cartas/288_2.png", "unidolized_icon" => "img/cartas/288_1_icon.png", "idolized_icon" => "img/cartas/288_2_icon.png", "pj_id" => 17
            ],
            [
                "nombre" => "The Starry Sky I Saw", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/290_1.png", "idolized" => "img/cartas/290_2.png", "unidolized_icon" => "img/cartas/290_1_icon.png", "idolized_icon" => "img/cartas/290_2_icon.png", "pj_id" => 1
            ],
            [
                "nombre" => "Blessings From My Friends", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/291_1.png", "idolized" => "img/cartas/291_2.png", "unidolized_icon" => "img/cartas/291_1_icon.png", "idolized_icon" => "img/cartas/291_2_icon.png", "pj_id" => 5
            ],
            [
                "nombre" => "Emu Style? The Art Of Dancing!", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/292_1.png", "idolized" => "img/cartas/292_2.png", "unidolized_icon" => "img/cartas/292_1_icon.png", "idolized_icon" => "img/cartas/292_2_icon.png", "pj_id" => 9
            ],
            [
                "nombre" => "Backstage Encouragement", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/293_1.png", "idolized" => "img/cartas/293_2.png", "unidolized_icon" => "img/cartas/293_1_icon.png", "idolized_icon" => "img/cartas/293_2_icon.png", "pj_id" => 13
            ],
            [
                "nombre" => "The World Shown Through Music", "rareza" => 3, "atributo" => "mysterious", "unidolized" => "img/cartas/294_1.png", "idolized" => "img/cartas/294_2.png", "unidolized_icon" => "img/cartas/294_1_icon.png", "idolized_icon" => "img/cartas/294_2_icon.png", "pj_id" => 17
            ],
            [
                "nombre" => "Happy Birthday!!", "rareza" => 5, "atributo" => "cute", "unidolized" => "img/cartas/295_1.png", "idolized" => "img/cartas/295_2.png", "unidolized_icon" => "img/cartas/295_1_icon.png", "idolized_icon" => "img/cartas/295_2_icon.png", "pj_id" => 6
            ],
            [
                "nombre" => "Over The Fence", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/296_1.png", "idolized" => "img/cartas/296_2.png", "unidolized_icon" => "img/cartas/296_1_icon.png", "idolized_icon" => "img/cartas/296_2_icon.png", "pj_id" => 10
            ],
            [
                "nombre" => "Faith In Believing", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/297_1.png", "idolized" => "img/cartas/297_2.png", "unidolized_icon" => "img/cartas/297_1_icon.png", "idolized_icon" => "img/cartas/297_2_icon.png", "pj_id" => 12
            ],
            [
                "nombre" => "A Choice To Be Proud Of", "rareza" => 2, "atributo" => "mysterious", "unidolized" => "img/cartas/300_1.png", "idolized" => "img/cartas/300_2.png", "unidolized_icon" => "img/cartas/300_1_icon.png", "idolized_icon" => "img/cartas/300_2_icon.png", "pj_id" => 11
            ],
            [
                "nombre" => "Happy Birthday!!", "rareza" => 5, "atributo" => "mysterious", "unidolized" => "img/cartas/306_1.png", "idolized" => "img/cartas/306_2.png", "unidolized_icon" => "img/cartas/306_1_icon.png", "idolized_icon" => "img/cartas/306_2_icon.png", "pj_id" => 3
            ],
            [
                "nombre" => "Reverse Hermit", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/307_1.png", "idolized" => "img/cartas/307_2.png", "unidolized_icon" => "img/cartas/307_1_icon.png", "idolized_icon" => "img/cartas/307_2_icon.png", "pj_id" => 20
            ],
            [
                "nombre" => "Hermit Searcher", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/308_1.png", "idolized" => "img/cartas/308_2.png", "unidolized_icon" => "img/cartas/308_1_icon.png", "idolized_icon" => "img/cartas/308_2_icon.png", "pj_id" => 19
            ],
            [
                "nombre" => "What The Hanged Girl Saw", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/309_1.png", "idolized" => "img/cartas/309_2.png", "unidolized_icon" => "img/cartas/309_1_icon.png", "idolized_icon" => "img/cartas/309_2_icon.png", "pj_id" => 17
            ],
            [
                "nombre" => "The Staff Of Guidance", "rareza" => 2, "atributo" => "cool", "unidolized" => "img/cartas/311_1.png", "idolized" => "img/cartas/311_2.png", "unidolized_icon" => "img/cartas/311_1_icon.png", "idolized_icon" => "img/cartas/311_2_icon.png", "pj_id" => 18
            ],
            [
                "nombre" => "Because You're Our Dear Friend", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/313_1.png", "idolized" => "img/cartas/313_2.png", "unidolized_icon" => "img/cartas/313_1_icon.png", "idolized_icon" => "img/cartas/313_2_icon.png", "pj_id" => 3
            ],
            [
                "nombre" => "Hurtful Words", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/314_1.png", "idolized" => "img/cartas/314_2.png", "unidolized_icon" => "img/cartas/314_1_icon.png", "idolized_icon" => "img/cartas/314_2_icon.png", "pj_id" => 4
            ],
            [
                "nombre" => "For Our Next Show!", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/315_1.png", "idolized" => "img/cartas/315_2.png", "unidolized_icon" => "img/cartas/315_1_icon.png", "idolized_icon" => "img/cartas/315_2_icon.png", "pj_id" => 2
            ],
            [
                "nombre" => "Our New Song's Goal", "rareza" => 3, "atributo" => "cute", "unidolized" => "img/cartas/316_1.png", "idolized" => "img/cartas/316_2.png", "unidolized_icon" => "img/cartas/316_1_icon.png", "idolized_icon" => "img/cartas/316_2_icon.png", "pj_id" => 1
            ],
            [
                "nombre" => "Happy Birthday!!", "rareza" => 5, "atributo" => "cute", "unidolized" => "img/cartas/318_1.png", "idolized" => "img/cartas/318_2.png", "unidolized_icon" => "img/cartas/318_1_icon.png", "idolized_icon" => "img/cartas/318_2_icon.png", "pj_id" => 11
            ],
            // [
            //     "nombre" => "A Secret Between Us", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/319_1.png", "idolized" => "img/cartas/319_2.png", "unidolized_icon" => "img/cartas/319_1_icon.png", "idolized_icon" => "img/cartas/319_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "A Street-style Idol?!", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/321_1.png", "idolized" => "img/cartas/321_2.png", "unidolized_icon" => "img/cartas/321_1_icon.png", "idolized_icon" => "img/cartas/321_2_icon.png", "pj_id" => 6
            // ],
            // [
            //     "nombre" => "Peak Excitement!", "rareza" => 3, "atributo" => "mysterious", "unidolized" => "img/cartas/322_1.png", "idolized" => "img/cartas/322_2.png", "unidolized_icon" => "img/cartas/322_1_icon.png", "idolized_icon" => "img/cartas/322_2_icon.png", "pj_id" => 10
            // ],
            // [
            //     "nombre" => "A Night Date At PXL", "rareza" => 2, "atributo" => "cute", "unidolized" => "img/cartas/323_1.png", "idolized" => "img/cartas/323_2.png", "unidolized_icon" => "img/cartas/323_1_icon.png", "idolized_icon" => "img/cartas/323_2_icon.png", "pj_id" => 8
            // ],
            // [
            //     "nombre" => "Under The First Snow", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/324_1.png", "idolized" => "img/cartas/324_2.png", "unidolized_icon" => "img/cartas/324_1_icon.png", "idolized_icon" => "img/cartas/324_2_icon.png", "pj_id" => 18
            // ],
            // [
            //     "nombre" => "CD Encounter", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/325_1.png", "idolized" => "img/cartas/325_2.png", "unidolized_icon" => "img/cartas/325_1_icon.png", "idolized_icon" => "img/cartas/325_2_icon.png", "pj_id" => 1
            // ],
            // [
            //     "nombre" => "The Usual Ramen", "rareza" => 3, "atributo" => "cool", "unidolized" => "img/cartas/327_1.png", "idolized" => "img/cartas/327_2.png", "unidolized_icon" => "img/cartas/327_1_icon.png", "idolized_icon" => "img/cartas/327_2_icon.png", "pj_id" => 17
            // ],
            // [
            //     "nombre" => "For My Dear Childhood Friends", "rareza" => 2, "atributo" => "pure", "unidolized" => "img/cartas/328_1.png", "idolized" => "img/cartas/328_2.png", "unidolized_icon" => "img/cartas/328_1_icon.png", "idolized_icon" => "img/cartas/328_2_icon.png", "pj_id" => 3
            // ],
            // [
            //     "nombre" => "Happy Birthday!!", "rareza" => 5, "atributo" => "cool", "unidolized" => "img/cartas/329_1.png", "idolized" => "img/cartas/329_2.png", "unidolized_icon" => "img/cartas/329_1_icon.png", "idolized_icon" => "img/cartas/329_2_icon.png", "pj_id" => 8
            // ],
            // [
            //     "nombre" => "Let's Do A Fan Meeting!", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/330_1.png", "idolized" => "img/cartas/330_2.png", "unidolized_icon" => "img/cartas/330_1_icon.png", "idolized_icon" => "img/cartas/330_2_icon.png", "pj_id" => 5
            // ],
            // [
            //     "nombre" => "Together With Our Fans!", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/331_1.png", "idolized" => "img/cartas/331_2.png", "unidolized_icon" => "img/cartas/331_1_icon.png", "idolized_icon" => "img/cartas/331_2_icon.png", "pj_id" => 7
            // ],
            // [
            //     "nombre" => "Have A Homemade Rice Ball♪", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/332_1.png", "idolized" => "img/cartas/332_2.png", "unidolized_icon" => "img/cartas/332_1_icon.png", "idolized_icon" => "img/cartas/332_2_icon.png", "pj_id" => 8
            // ],
            // [
            //     "nombre" => "Present For You!", "rareza" => 2, "atributo" => "cute", "unidolized" => "img/cartas/334_1.png", "idolized" => "img/cartas/334_2.png", "unidolized_icon" => "img/cartas/334_1_icon.png", "idolized_icon" => "img/cartas/334_2_icon.png", "pj_id" => 6
            // ],
            // [
            //     "nombre" => "Outdoor Cooking!", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/341_1.png", "idolized" => "img/cartas/341_2.png", "unidolized_icon" => "img/cartas/341_1_icon.png", "idolized_icon" => "img/cartas/341_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "A Winter Evening Chat", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/342_1.png", "idolized" => "img/cartas/342_2.png", "unidolized_icon" => "img/cartas/342_1_icon.png", "idolized_icon" => "img/cartas/342_2_icon.png", "pj_id" => 11
            // ],
            // [
            //     "nombre" => "BBQ With Everyone♪", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/343_1.png", "idolized" => "img/cartas/343_2.png", "unidolized_icon" => "img/cartas/343_1_icon.png", "idolized_icon" => "img/cartas/343_2_icon.png", "pj_id" => 10
            // ],
            // [
            //     "nombre" => "Warm Camping Style", "rareza" => 2, "atributo" => "cute", "unidolized" => "img/cartas/345_1.png", "idolized" => "img/cartas/345_2.png", "unidolized_icon" => "img/cartas/345_1_icon.png", "idolized_icon" => "img/cartas/345_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "Dazzling Dream Stage", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/348_1.png", "idolized" => "img/cartas/348_2.png", "unidolized_icon" => "img/cartas/348_1_icon.png", "idolized_icon" => "img/cartas/348_2_icon.png", "pj_id" => 15
            // ],
            // [
            //     "nombre" => "Endless Imagination & Challenges", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/349_1.png", "idolized" => "img/cartas/349_2.png", "unidolized_icon" => "img/cartas/349_1_icon.png", "idolized_icon" => "img/cartas/349_2_icon.png", "pj_id" => 16
            // ],
            // [
            //     "nombre" => "The Future We're Wishing For", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/350_1.png", "idolized" => "img/cartas/350_2.png", "unidolized_icon" => "img/cartas/350_1_icon.png", "idolized_icon" => "img/cartas/350_2_icon.png", "pj_id" => 6
            // ],
            // [
            //     "nombre" => "How to Spend New Year's Eve", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/351_1.png", "idolized" => "img/cartas/351_2.png", "unidolized_icon" => "img/cartas/351_1_icon.png", "idolized_icon" => "img/cartas/351_2_icon.png", "pj_id" => 3
            // ],
            // [
            //     "nombre" => "With The First Sunrise At My Back", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/352_1.png", "idolized" => "img/cartas/352_2.png", "unidolized_icon" => "img/cartas/352_1_icon.png", "idolized_icon" => "img/cartas/352_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "Sound & Calligraphy", "rareza" => 2, "atributo" => "cool", "unidolized" => "img/cartas/354_1.png", "idolized" => "img/cartas/354_2.png", "unidolized_icon" => "img/cartas/354_1_icon.png", "idolized_icon" => "img/cartas/354_2_icon.png", "pj_id" => 4
            // ],
            // [
            //     "nombre" => "Happy Birthday!!", "rareza" => 5, "atributo" => "happy", "unidolized" => "img/cartas/355_1.png", "idolized" => "img/cartas/355_2.png", "unidolized_icon" => "img/cartas/355_1_icon.png", "idolized_icon" => "img/cartas/355_2_icon.png", "pj_id" => 4
            // ],
            // [
            //     "nombre" => "Private Emu's Investigating!", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/356_1.png", "idolized" => "img/cartas/356_2.png", "unidolized_icon" => "img/cartas/356_1_icon.png", "idolized_icon" => "img/cartas/356_2_icon.png", "pj_id" => 14
            // ],
            // [
            //     "nombre" => "Dance! And! Sing!", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/357_1.png", "idolized" => "img/cartas/357_2.png", "unidolized_icon" => "img/cartas/357_1_icon.png", "idolized_icon" => "img/cartas/357_2_icon.png", "pj_id" => 13
            // ],
            // [
            //     "nombre" => "I Thought It Was Game Over", "rareza" => 3, "atributo" => "happy", "unidolized" => "img/cartas/359_1.png", "idolized" => "img/cartas/359_2.png", "unidolized_icon" => "img/cartas/359_1_icon.png", "idolized_icon" => "img/cartas/359_2_icon.png", "pj_id" => 15
            // ],
            // [
            //     "nombre" => "Rainbow☆Cast", "rareza" => 2, "atributo" => "mysterious", "unidolized" => "img/cartas/360_1.png", "idolized" => "img/cartas/360_2.png", "unidolized_icon" => "img/cartas/360_1_icon.png", "idolized_icon" => "img/cartas/360_2_icon.png", "pj_id" => 16
            // ],
            // [
            //     "nombre" => "Faintly Glowing Elpis", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/361_1.png", "idolized" => "img/cartas/361_2.png", "unidolized_icon" => "img/cartas/361_1_icon.png", "idolized_icon" => "img/cartas/361_2_icon.png", "pj_id" => 17
            // ],
            // [
            //     "nombre" => "Elpis At The Depths Of Despair", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/362_1.png", "idolized" => "img/cartas/362_2.png", "unidolized_icon" => "img/cartas/362_1_icon.png", "idolized_icon" => "img/cartas/362_2_icon.png", "pj_id" => 18
            // ],
            // [
            //     "nombre" => "After Parties That Became A Regular Thing", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/363_1.png", "idolized" => "img/cartas/363_2.png", "unidolized_icon" => "img/cartas/363_1_icon.png", "idolized_icon" => "img/cartas/363_2_icon.png", "pj_id" => 20
            // ],
            // [
            //     "nombre" => "Creating Something Worth Seeing", "rareza" => 3, "atributo" => "pure", "unidolized" => "img/cartas/364_1.png", "idolized" => "img/cartas/364_2.png", "unidolized_icon" => "img/cartas/364_1_icon.png", "idolized_icon" => "img/cartas/364_2_icon.png", "pj_id" => 19
            // ],
            // [
            //     "nombre" => "Happy Birthday!!", "rareza" => 5, "atributo" => "mysterious", "unidolized" => "img/cartas/366_1.png", "idolized" => "img/cartas/366_2.png", "unidolized_icon" => "img/cartas/366_1_icon.png", "idolized_icon" => "img/cartas/366_2_icon.png", "pj_id" => 18
            // ],
            // [
            //     "nombre" => "Baking Sweets In Secret", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/368_1.png", "idolized" => "img/cartas/368_2.png", "unidolized_icon" => "img/cartas/368_1_icon.png", "idolized_icon" => "img/cartas/368_2_icon.png", "pj_id" => 7
            // ],
            // [
            //     "nombre" => "An Unexpected Phone Call", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/369_1.png", "idolized" => "img/cartas/369_2.png", "unidolized_icon" => "img/cartas/369_1_icon.png", "idolized_icon" => "img/cartas/369_2_icon.png", "pj_id" => 2
            // ],
            // [
            //     "nombre" => "Surprise☆For☆My☆Family", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/370_1.png", "idolized" => "img/cartas/370_2.png", "unidolized_icon" => "img/cartas/370_1_icon.png", "idolized_icon" => "img/cartas/370_2_icon.png", "pj_id" => 14
            // ],
            // [
            //     "nombre" => "Lady Valentine", "rareza" => 2, "atributo" => "pure", "unidolized" => "img/cartas/372_1.png", "idolized" => "img/cartas/372_2.png", "unidolized_icon" => "img/cartas/372_1_icon.png", "idolized_icon" => "img/cartas/372_2_icon.png", "pj_id" => 8
            // ],
            // [
            //     "nombre" => "The \"Legend\" We Came To Know", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/373_1.png", "idolized" => "img/cartas/373_2.png", "unidolized_icon" => "img/cartas/373_1_icon.png", "idolized_icon" => "img/cartas/373_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "Turning Excitement Into Words", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/374_1.png", "idolized" => "img/cartas/374_2.png", "unidolized_icon" => "img/cartas/374_1_icon.png", "idolized_icon" => "img/cartas/374_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "We're About To Open!", "rareza" => 3, "atributo" => "cute", "unidolized" => "img/cartas/376_1.png", "idolized" => "img/cartas/376_2.png", "unidolized_icon" => "img/cartas/376_1_icon.png", "idolized_icon" => "img/cartas/376_2_icon.png", "pj_id" => 10
            // ],
            // [
            //     "nombre" => "Towards Legend", "rareza" => 2, "atributo" => "cool", "unidolized" => "img/cartas/377_1.png", "idolized" => "img/cartas/377_2.png", "unidolized_icon" => "img/cartas/377_1_icon.png", "idolized_icon" => "img/cartas/377_2_icon.png", "pj_id" => 11
            // ],
            // [
            //     "nombre" => "Happy Birthday!!", "rareza" => 5, "atributo" => "cool", "unidolized" => "img/cartas/378_1.png", "idolized" => "img/cartas/378_2.png", "unidolized_icon" => "img/cartas/378_1_icon.png", "idolized_icon" => "img/cartas/378_2_icon.png", "pj_id" => 17
            // ],
            // [
            //     "nombre" => "An Old Wish", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/380_1.png", "idolized" => "img/cartas/380_2.png", "unidolized_icon" => "img/cartas/380_1_icon.png", "idolized_icon" => "img/cartas/380_2_icon.png", "pj_id" => 4
            // ],
            // [
            //     "nombre" => "Did You Hear That?!", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/381_1.png", "idolized" => "img/cartas/381_2.png", "unidolized_icon" => "img/cartas/381_1_icon.png", "idolized_icon" => "img/cartas/381_2_icon.png", "pj_id" => 1
            // ],
            // [
            //     "nombre" => "Lesson From A Future Star", "rareza" => 3, "atributo" => "happy", "unidolized" => "img/cartas/383_1.png", "idolized" => "img/cartas/383_2.png", "unidolized_icon" => "img/cartas/383_1_icon.png", "idolized_icon" => "img/cartas/383_2_icon.png", "pj_id" => 2
            // ],
            // [
            //     "nombre" => "Cool Rider Lady", "rareza" => 2, "atributo" => "happy", "unidolized" => "img/cartas/384_1.png", "idolized" => "img/cartas/384_2.png", "unidolized_icon" => "img/cartas/384_1_icon.png", "idolized_icon" => "img/cartas/384_2_icon.png", "pj_id" => 3
            // ],
            // [
            //     "nombre" => "An Emergency Meeting?!", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/385_1.png", "idolized" => "img/cartas/385_2.png", "unidolized_icon" => "img/cartas/385_1_icon.png", "idolized_icon" => "img/cartas/385_2_icon.png", "pj_id" => 13
            // ],
            // [
            //     "nombre" => "No Compromises When Making Chocolates", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/386_1.png", "idolized" => "img/cartas/386_2.png", "unidolized_icon" => "img/cartas/386_1_icon.png", "idolized_icon" => "img/cartas/386_2_icon.png", "pj_id" => 11
            // ],
            // [
            //     "nombre" => "Making Chocolates With Children", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/387_1.png", "idolized" => "img/cartas/387_2.png", "unidolized_icon" => "img/cartas/387_1_icon.png", "idolized_icon" => "img/cartas/387_2_icon.png", "pj_id" => 20
            // ],
            // [
            //     "nombre" => "Filled With My \"Thanks\"", "rareza" => 3, "atributo" => "mysterious", "unidolized" => "img/cartas/388_1.png", "idolized" => "img/cartas/388_2.png", "unidolized_icon" => "img/cartas/388_1_icon.png", "idolized_icon" => "img/cartas/388_2_icon.png", "pj_id" => 4
            // ],
            // [
            //     "nombre" => "Happy Birthday!!", "rareza" => 5, "atributo" => "happy", "unidolized" => "img/cartas/390_1.png", "idolized" => "img/cartas/390_2.png", "unidolized_icon" => "img/cartas/390_1_icon.png", "idolized_icon" => "img/cartas/390_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "Feels Like Magic", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/391_1.png", "idolized" => "img/cartas/391_2.png", "unidolized_icon" => "img/cartas/391_1_icon.png", "idolized_icon" => "img/cartas/391_2_icon.png", "pj_id" => 8
            // ],
            // [
            //     "nombre" => "Passionate Talk!", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/392_1.png", "idolized" => "img/cartas/392_2.png", "unidolized_icon" => "img/cartas/392_1_icon.png", "idolized_icon" => "img/cartas/392_2_icon.png", "pj_id" => 5
            // ],
            // [
            //     "nombre" => "Expressing \"Who We Are\"", "rareza" => 3, "atributo" => "mysterious", "unidolized" => "img/cartas/394_1.png", "idolized" => "img/cartas/394_2.png", "unidolized_icon" => "img/cartas/394_1_icon.png", "idolized_icon" => "img/cartas/394_2_icon.png", "pj_id" => 6
            // ],
            // [
            //     "nombre" => "Mysterious Heart Witch", "rareza" => 2, "atributo" => "mysterious", "unidolized" => "img/cartas/395_1.png", "idolized" => "img/cartas/395_2.png", "unidolized_icon" => "img/cartas/395_1_icon.png", "idolized_icon" => "img/cartas/395_2_icon.png", "pj_id" => 7
            // ],
            // [
            //     "nombre" => "Happy Birthday!!", "rareza" => 5, "atributo" => "pure", "unidolized" => "img/cartas/396_1.png", "idolized" => "img/cartas/396_2.png", "unidolized_icon" => "img/cartas/396_1_icon.png", "idolized_icon" => "img/cartas/396_2_icon.png", "pj_id" => 7
            // ],
            // [
            //     "nombre" => "Through Pain And Misery", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/397_1.png", "idolized" => "img/cartas/397_2.png", "unidolized_icon" => "img/cartas/397_1_icon.png", "idolized_icon" => "img/cartas/397_2_icon.png", "pj_id" => 19
            // ],
            // [
            //     "nombre" => "When The Sound Becomes Clear", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/398_1.png", "idolized" => "img/cartas/398_2.png", "unidolized_icon" => "img/cartas/398_1_icon.png", "idolized_icon" => "img/cartas/398_2_icon.png", "pj_id" => 17
            // ],
            // [
            //     "nombre" => "Colorful Recollection", "rareza" => 3, "atributo" => "pure", "unidolized" => "img/cartas/400_1.png", "idolized" => "img/cartas/400_2.png", "unidolized_icon" => "img/cartas/400_1_icon.png", "idolized_icon" => "img/cartas/400_2_icon.png", "pj_id" => 18
            // ],
            // [
            //     "nombre" => "A Night With Just The Three Of Us", "rareza" => 2, "atributo" => "pure", "unidolized" => "img/cartas/401_1.png", "idolized" => "img/cartas/401_2.png", "unidolized_icon" => "img/cartas/401_1_icon.png", "idolized_icon" => "img/cartas/401_2_icon.png", "pj_id" => 20
            // ],
            // [
            //     "nombre" => "Past Excitement", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/402_1.png", "idolized" => "img/cartas/402_2.png", "unidolized_icon" => "img/cartas/402_1_icon.png", "idolized_icon" => "img/cartas/402_2_icon.png", "pj_id" => 10
            // ],
            // [
            //     "nombre" => "Feelings That Were Buried", "rareza" => 4, "atributo" => "happy", "unidolized" => "img/cartas/403_1.png", "idolized" => "img/cartas/403_2.png", "unidolized_icon" => "img/cartas/403_1_icon.png", "idolized_icon" => "img/cartas/403_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "Star Melody", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/410_1.png", "idolized" => "img/cartas/410_2.png", "unidolized_icon" => "img/cartas/410_1_icon.png", "idolized_icon" => "img/cartas/410_2_icon.png", "pj_id" => 13
            // ],
            // [
            //     "nombre" => "The Little Squirrels' Invitation", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/411_1.png", "idolized" => "img/cartas/411_2.png", "unidolized_icon" => "img/cartas/411_1_icon.png", "idolized_icon" => "img/cartas/411_2_icon.png", "pj_id" => 15
            // ],
            // [
            //     "nombre" => "Appreciating That Spirit", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/412_1.png", "idolized" => "img/cartas/412_2.png", "unidolized_icon" => "img/cartas/412_1_icon.png", "idolized_icon" => "img/cartas/412_2_icon.png", "pj_id" => 16
            // ],
            // [
            //     "nombre" => "Operation Smile Was A Great Success!", "rareza" => 3, "atributo" => "mysterious", "unidolized" => "img/cartas/413_1.png", "idolized" => "img/cartas/413_2.png", "unidolized_icon" => "img/cartas/413_1_icon.png", "idolized_icon" => "img/cartas/413_2_icon.png", "pj_id" => 14
            // ],
            // [
            //     "nombre" => "Happy Birthday!!", "rareza" => 5, "atributo" => "cool", "unidolized" => "img/cartas/415_1.png", "idolized" => "img/cartas/415_2.png", "unidolized_icon" => "img/cartas/415_1_icon.png", "idolized_icon" => "img/cartas/415_2_icon.png", "pj_id" => 5
            // ],
            // [
            //     "nombre" => "Before Thinking About It", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/416_1.png", "idolized" => "img/cartas/416_2.png", "unidolized_icon" => "img/cartas/416_1_icon.png", "idolized_icon" => "img/cartas/416_2_icon.png", "pj_id" => 1
            // ],
            // [
            //     "nombre" => "The Yummiest Drink!", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/417_1.png", "idolized" => "img/cartas/417_2.png", "unidolized_icon" => "img/cartas/417_1_icon.png", "idolized_icon" => "img/cartas/417_2_icon.png", "pj_id" => 2
            // ],
            // [
            //     "nombre" => "A Piece Of Kindness", "rareza" => 4, "atributo" => "mysterious", "unidolized" => "img/cartas/418_1.png", "idolized" => "img/cartas/418_2.png", "unidolized_icon" => "img/cartas/418_1_icon.png", "idolized_icon" => "img/cartas/418_2_icon.png", "pj_id" => 3
            // ],
            // [
            //     "nombre" => "How Things Develop From Here", "rareza" => 3, "atributo" => "cool", "unidolized" => "img/cartas/419_1.png", "idolized" => "img/cartas/419_2.png", "unidolized_icon" => "img/cartas/419_1_icon.png", "idolized_icon" => "img/cartas/419_2_icon.png", "pj_id" => 4
            // ],
            // [
            //     "nombre" => "Happy Birthday!!", "rareza" => 5, "atributo" => "mysterious", "unidolized" => "img/cartas/421_1.png", "idolized" => "img/cartas/421_2.png", "unidolized_icon" => "img/cartas/421_1_icon.png", "idolized_icon" => "img/cartas/421_2_icon.png", "pj_id" => 19
            // ],
            // [
            //     "nombre" => "Perfect Premonition", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/422_1.png", "idolized" => "img/cartas/422_2.png", "unidolized_icon" => "img/cartas/422_1_icon.png", "idolized_icon" => "img/cartas/422_2_icon.png", "pj_id" => 6
            // ],
            // [
            //     "nombre" => "My First Vocal Range Check!", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/423_1.png", "idolized" => "img/cartas/423_2.png", "unidolized_icon" => "img/cartas/423_1_icon.png", "idolized_icon" => "img/cartas/423_2_icon.png", "pj_id" => 5
            // ],
            // [
            //     "nombre" => "Completion Report!", "rareza" => 2, "atributo" => "happy", "unidolized" => "img/cartas/426_1.png", "idolized" => "img/cartas/426_2.png", "unidolized_icon" => "img/cartas/426_1_icon.png", "idolized_icon" => "img/cartas/426_2_icon.png", "pj_id" => 8
            // ],
            // [
            //     "nombre" => "Happy Birthday!!", "rareza" => 5, "atributo" => "cute", "unidolized" => "img/cartas/427_1.png", "idolized" => "img/cartas/427_2.png", "unidolized_icon" => "img/cartas/427_1_icon.png", "idolized_icon" => "img/cartas/427_2_icon.png", "pj_id" => 2
            // ],
            // [
            //     "nombre" => "Brilliance At Twilight", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/428_1.png", "idolized" => "img/cartas/428_2.png", "unidolized_icon" => "img/cartas/428_1_icon.png", "idolized_icon" => "img/cartas/428_2_icon.png", "pj_id" => 16
            // ],
            // [
            //     "nombre" => "Smell You Later!", "rareza" => 4, "atributo" => "cool", "unidolized" => "img/cartas/429_1.png", "idolized" => "img/cartas/429_2.png", "unidolized_icon" => "img/cartas/429_1_icon.png", "idolized_icon" => "img/cartas/429_2_icon.png", "pj_id" => 20
            // ],
            // [
            //     "nombre" => "There's No Time To Lose!", "rareza" => 3, "atributo" => "pure", "unidolized" => "img/cartas/431_1.png", "idolized" => "img/cartas/431_2.png", "unidolized_icon" => "img/cartas/431_1_icon.png", "idolized_icon" => "img/cartas/431_2_icon.png", "pj_id" => 11
            // ],
            // [
            //     "nombre" => "Behind The Scenes At The Sports Festival", "rareza" => 2, "atributo" => "happy", "unidolized" => "img/cartas/432_1.png", "idolized" => "img/cartas/432_2.png", "unidolized_icon" => "img/cartas/432_1_icon.png", "idolized_icon" => "img/cartas/432_2_icon.png", "pj_id" => 19
            // ],
            // [
            //     "nombre" => "Happy Birthday!!", "rareza" => 5, "atributo" => "happy", "unidolized" => "img/cartas/433_1.png", "idolized" => "img/cartas/433_2.png", "unidolized_icon" => "img/cartas/433_1_icon.png", "idolized_icon" => "img/cartas/433_2_icon.png", "pj_id" => 13
            // ],
            // [
            //     "nombre" => "Newfound Enthusiasm", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/434_1.png", "idolized" => "img/cartas/434_2.png", "unidolized_icon" => "img/cartas/434_1_icon.png", "idolized_icon" => "img/cartas/434_2_icon.png", "pj_id" => 11
            // ],
            // [
            //     "nombre" => "I Got Praised♪", "rareza" => 4, "atributo" => "cute", "unidolized" => "img/cartas/435_1.png", "idolized" => "img/cartas/435_2.png", "unidolized_icon" => "img/cartas/435_1_icon.png", "idolized_icon" => "img/cartas/435_2_icon.png", "pj_id" => 9
            // ],
            // [
            //     "nombre" => "Your Stomach Doesn't Lie", "rareza" => 3, "atributo" => "mysterious", "unidolized" => "img/cartas/437_1.png", "idolized" => "img/cartas/437_2.png", "unidolized_icon" => "img/cartas/437_1_icon.png", "idolized_icon" => "img/cartas/437_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "A Bit Of Frustration", "rareza" => 2, "atributo" => "pure", "unidolized" => "img/cartas/438_1.png", "idolized" => "img/cartas/438_2.png", "unidolized_icon" => "img/cartas/438_1_icon.png", "idolized_icon" => "img/cartas/438_2_icon.png", "pj_id" => 10
            // ],
            // [
            //     "nombre" => "Happy Birthday!!", "rareza" => 5, "atributo" => "cool", "unidolized" => "img/cartas/439_1.png", "idolized" => "img/cartas/439_2.png", "unidolized_icon" => "img/cartas/439_1_icon.png", "idolized_icon" => "img/cartas/439_2_icon.png", "pj_id" => 12
            // ],
            // [
            //     "nombre" => "Dressed In Pure White", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/440_1.png", "idolized" => "img/cartas/440_2.png", "unidolized_icon" => "img/cartas/440_1_icon.png", "idolized_icon" => "img/cartas/440_2_icon.png", "pj_id" => 10
            // ],
            // [
            //     "nombre" => "Keeping You From Falling", "rareza" => 4, "atributo" => "pure", "unidolized" => "img/cartas/441_1.png", "idolized" => "img/cartas/441_2.png", "unidolized_icon" => "img/cartas/441_1_icon.png", "idolized_icon" => "img/cartas/441_2_icon.png", "pj_id" => 8
            // ],
            // [
            //     "nombre" => "Captivated By Cuteness", "rareza" => 3, "atributo" => "cute", "unidolized" => "img/cartas/443_1.png", "idolized" => "img/cartas/443_2.png", "unidolized_icon" => "img/cartas/443_1_icon.png", "idolized_icon" => "img/cartas/443_2_icon.png", "pj_id" => 7
            // ],
            // [
            //     "nombre" => "Pretty Bridesmaid", "rareza" => 2, "atributo" => "happy", "unidolized" => "img/cartas/444_1.png", "idolized" => "img/cartas/444_2.png", "unidolized_icon" => "img/cartas/444_1_icon.png", "idolized_icon" => "img/cartas/444_2_icon.png", "pj_id" => 9
            // ],
        ];

        foreach ($cartas as $carta) {
            Carta::updateOrCreate(['unidolized' => $carta['unidolized']], $carta);
        }
    }
}
