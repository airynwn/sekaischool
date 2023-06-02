<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use App\Models\Trivia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class TriviaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trivias = Trivia::orderBy('id')->paginate(20);
        $tablafk = Personaje::all();
        $fk = 'pj_id';

        if (auth()->check() && auth()->user()->admin && strpos(Route::current()->getName(), 'admin') === 0) {
            return view('admin.trivias.index', [
                'trivias' => $trivias,
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
        $tabla = 'trivia';
        $tablafk = Personaje::all();
        $fk = 'pj_id';

        return view('admin.trivias.create', [
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
        $request->validate([
            'dato' => 'required|string',
            'pj_id' => ['required', 'exists:personajes,id'],
        ]);

        Trivia::create($request->all());

        return redirect()->route('admin.trivias.index')->with('success', 'Se ha creado la trivia con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trivia  $trivia
     * @return \Illuminate\Http\Response
     */
    public function show(Trivia $trivia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trivia  $trivia
     * @return \Illuminate\Http\Response
     */
    public function edit(Trivia $trivia)
    {
        $tabla = 'trivia';
        $tablafk = Personaje::all();
        $fk = 'pj_id';

        return view('admin.trivias.edit', [
            'tabla' => $tabla,
            'tablafk' => $tablafk,
            'fk' => $fk,
            'dato' => $trivia
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trivia  $trivia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trivia $trivia)
    {
        $request->validate([
            'dato' => 'required|string',
            'pj_id' => ['required', 'exists:personajes,id'],
        ]);

        $trivia->update($request->all());

        return redirect()->route('admin.trivias.index')->with('success', 'Se ha modificado la trivia con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trivia  $trivia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trivia $trivia)
    {
        $trivia->delete();

        return redirect()->route('admin.trivias.index')->with('success', 'Se ha eliminado la trivia con éxito.');
    }
}
