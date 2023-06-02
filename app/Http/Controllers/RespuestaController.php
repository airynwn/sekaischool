<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use App\Models\Pregunta;
use App\Models\Respuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respuestas = Respuesta::orderBy('id')->paginate(10);

        if (auth()->check() && auth()->user()->admin && strpos(Route::current()->getName(), 'admin') === 0) {
            return view('admin.respuestas.index', [
                'respuestas' => $respuestas,
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
        $preguntas = Pregunta::all();
        $personajes = Personaje::all();


        return view('admin.respuestas.create', [
            'preguntas' => $preguntas,
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
            'respuesta' => 'required|string',
            'pregunta_id' => ['required', 'exists:preguntas,id'],
            'pj_id' => ['required', 'exists:personajes,id'],
        ]);

        Respuesta::create($request->all());

        return redirect()->route('admin.respuestas.index')->with('success', 'Se ha creado la respuesta con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function show(Respuesta $respuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(Respuesta $respuesta)
    {
        $preguntas = Pregunta::all();
        $personajes = Personaje::all();


        return view('admin.respuestas.edit', [
            'preguntas' => $preguntas,
            'personajes' => $personajes,
            'respuesta' => $respuesta,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuesta $respuesta)
    {
        $request->validate([
            'respuesta' => 'required|string',
            'pregunta_id' => ['required', 'exists:preguntas,id'],
            'pj_id' => ['required', 'exists:personajes,id'],
        ]);

        $respuesta->update($request->all());

        return redirect()->route('admin.respuestas.index')->with('success', 'Se ha modificado la respuesta con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Respuesta $respuesta)
    {
        $respuesta->delete();

        return redirect()->route('admin.respuestas.index')->with('success', 'Se ha eliminado la respuesta con éxito.');
    }
}
