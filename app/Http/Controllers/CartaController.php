<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use App\Models\Personaje;
use Illuminate\Http\Request;

class CartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartas = Carta::all();
        $tablafk = Personaje::all();
        $fk = 'pj_id';

        if (auth()->user()->admin) {
            return view('admin.cartas.index', [
                'cartas' => $cartas,
                'tablafk' => $tablafk,
                'fk' => $fk
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tabla = 'cartas';
        $tablafk = Personaje::all();
        $fk = 'pj_id';

        return view('admin.cartas.create', [
            'tabla' => $tabla,
            'tablafk' => $tablafk,
            'fk' => $fk
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Carta::create([
            'rareza' => $request->rareza,
            'atributo' => $request->atributo,
            'imagen' => $request->imagen,
            'pj_id' => $request->pj_id,
        ]);

        return redirect()->route('admin.cartas.index')->with('success', 'Se ha creado la carta con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carta  $carta
     * @return \Illuminate\Http\Response
     */
    public function show(Carta $carta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carta  $carta
     * @return \Illuminate\Http\Response
     */
    public function edit(Carta $carta)
    {
        $tabla = 'cartas';
        $tablafk = Personaje::all();
        $fk = 'pj_id';

        return view('admin.cartas.edit', [
            'tabla' => $tabla,
            'tablafk' => $tablafk,
            'fk' => $fk,
            'dato' => $carta
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carta  $carta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carta $carta)
    {
        $carta->update([
            'rareza' => $request->rareza,
            'atributo' => $request->atributo,
            'imagen' => $request->imagen,
            'pj_id' => $request->pj_id,
        ]);

        return redirect()->route('admin.cartas.index')->with('success', 'Se ha modificado la carta con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carta  $carta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carta $carta)
    {
        //
    }
}
