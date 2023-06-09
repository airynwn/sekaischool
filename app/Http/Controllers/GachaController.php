<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use Illuminate\Http\Request;

class GachaController extends Controller
{
    const R2_PROB = 88.5;
    const R3_PROB = 8.5;
    const R4_PROB = 3;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartas = Carta::all();

        // Pull: Tirada de 10 cartas
        $pull = [];

        // Minroll: Pull que tiene todas las cartas de rareza 2
        // y, por lo tanto, se le añade una de rareza 3 que está garantizada
        $minroll = true;

        for ($i = 0; $i < 10; $i++) {
            // Número del 0 al 100 (rango total)
            // Probabilidad: Intervalo / Rango total
            $rng = mt_rand(0, 100);

            // Intervalo 0 a 88.5%
            if ($rng <= self::R2_PROB) {
                $rareza = 2;
            // RNG > 88.5% => Intervalo 88.5 a 97 (88.5 + 8.5)
            } elseif ($rng <= self::R2_PROB + self::R3_PROB) {
                $rareza = 3;
                $minroll = false;
            // RNG > 97% => Intervalo 97 a 100 (88.5 + 8.5 + 3)
            } else {
                $rareza = 4;
                $minroll = false;
            }

            // Carta aleatoria según RNG
            $carta = Carta::where('rareza', $rareza)->inRandomOrder()->first();
            $pull[] = $carta;
        }

        // Si, tras hacer la pull, el resultado fue 10 2*, se cambia la última por 3*
        if ($minroll) {
            $pull[9] = Carta::where('rareza', 3)->inRandomOrder()->first();
        }

        return view('pages.gacha', [
            'cartas' => $cartas,
            'pull' => $pull,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
