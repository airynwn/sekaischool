<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use App\Models\Relacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;

class RelacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relaciones = Relacion::orderBy('id')->paginate(10);

        if (auth()->check() && auth()->user()->admin && strpos(Route::current()->getName(), 'admin') === 0) {
            return view('admin.relaciones.index', [
                'relaciones' => $relaciones,
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
        $personajes = Personaje::all();


        return view('admin.relaciones.create', [
            'personajes' => $personajes,
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
        $pj1_id = $request->pj1_id;
        $pj2_id = $request->pj2_id;

        // Si el ID del pj1 es mayor que el del pj2, se intercambian las posiciones
        if ($pj1_id > $pj2_id) {
            [$pj1_id, $pj2_id] = [$pj2_id, $pj1_id];
        }

        $request->validate([
            'pj1_id' => ['required', 'exists:personajes,id', 'different:pj2_id'],
            'pj2_id' => ['required', 'exists:personajes,id', 'different:pj1_id'],
            'descripcion' => 'required|string|unique:relaciones',
        ]);

        Relacion::create([
            'pj1_id' => $pj1_id,
            'pj2_id' => $pj2_id,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('admin.relaciones.index')->with('success', 'Se ha creado la relación con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Relacion  $relacion
     * @return \Illuminate\Http\Response
     */
    public function show(Relacion $relacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Relacion  $relacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Relacion $relacion)
    {
        $personajes = Personaje::all();


        return view('admin.relaciones.edit', [
            'personajes' => $personajes,
            'relacion' => $relacion,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Relacion  $relacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relacion $relacion)
    {
        $pj1_id = $request->pj1_id;
        $pj2_id = $request->pj2_id;

        if ($pj1_id > $pj2_id) {
            [$pj1_id, $pj2_id] = [$pj2_id, $pj1_id];
        }

        $request->validate([
            'pj1_id' => ['required', 'exists:personajes,id', 'different:pj2_id'],
            'pj2_id' => ['required', 'exists:personajes,id', 'different:pj1_id'],
            'descripcion' => ['required', 'string', Rule::unique('relaciones')->ignore($relacion->id)],
        ]);

        $relacion->update([
            'pj1_id' => $pj1_id,
            'pj2_id' => $pj2_id,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('admin.relaciones.index')->with('success', 'Se ha modificado la relación con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Relacion  $relacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relacion $relacion)
    {
        $relacion->delete();

        return redirect()->route('admin.relaciones.index')->with('success', 'Se ha eliminado la relación con éxito.');
    }
}
