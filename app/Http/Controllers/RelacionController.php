<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use App\Models\Relacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
        $request->validate([
            'pj1_id' => ['required', 'exists:personajes,id'],
            'pj2_id' => ['required', 'exists:personajes,id'],
            'descripcion' => 'required|string',
        ]);

        Relacion::create($request->all());

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
        $request->validate([
            'pj1_id' => ['required', 'exists:personajes,id'],
            'pj2_id' => ['required', 'exists:personajes,id'],
            'descripcion' => 'required|string',
        ]);

        $relacion->update($request->all());

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
