<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Personaje;
use Illuminate\Http\Request;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personajes = Personaje::all();

        if (auth()->user()->admin) {
            return view('admin.personajes.index', ['personajes' => $personajes]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tabla = 'personajes';
        $tablafk = Grupo::all();
        $fk = 'grupo_id';

        return view('admin.personajes.create', [
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
        Personaje::create([
            'nombre' => $request->nombre,
            'historia' => $request->historia,
            'personalidad' => $request->personalidad,
            'imagen' => $request->imagen,
            'comic' => $request->comic,
            'chibi' => $request->chibi,
            'icon' => $request->icon,
            'stamp' => $request->stamp,
            'sticker' => $request->sticker,
            'grupo_id' => $request->grupo_id,
        ]);

        return redirect()->route('admin.personajes.index')->with('success', 'Se ha creado el personaje con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function show(Personaje $personaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Personaje $personaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personaje $personaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personaje $personaje)
    {
        //
    }
}
