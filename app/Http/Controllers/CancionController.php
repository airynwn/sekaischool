<?php

namespace App\Http\Controllers;

use App\Models\Cancion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

class CancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $random = Cancion::inRandomOrder()->first();
        $canciones = Cancion::all();
        $tablafk = null;
        $fk = null;

        if (auth()->check() && auth()->user()->admin && strpos(Route::current()->getName(), 'admin') === 0) {
            return view('admin.canciones.index', [
                'canciones' => Cancion::orderBy('id')->paginate(5),
                'tablafk' => $tablafk,
                'fk' => $fk
            ]);
        } else {
            return view('pages.canciones', [
                'canciones' => $canciones,
                'random' => $random,
            ]);
        }


    }

    public function adivinar(Request $request)
    {
        $guess = $request->cancion;
        $solucion = $request->solucion;
        $random = Cancion::inRandomOrder()->first();

        return response()->json([
            'guess' => $guess,
            'solucion' => $solucion,
            'random' => $random,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tabla = 'canciones';
        $tablafk = null;
        $fk = null;

        return view('admin.canciones.create', [
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
            'titulo' => 'required|string',
            'audio' => ['required', 'file', 'mimetypes:audio/ogg', 'max:10000'],
        ]);

        $cancion = Cancion::create($request->all());

        $audio = 'cancion_' . $cancion->id . $request->file('audio')->getClientOriginalExtension();
        $cancion->audio = str_replace(
            'public',
            'storage',
            $request->file('audio')->storeAs('public/canciones', $audio)
        );

        $cancion->save();

        return redirect()->route('admin.canciones.index')->with('success', 'Se ha creado la canción con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Canciones  $canciones
     * @return \Illuminate\Http\Response
     */
    public function show(Cancion $cancion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Canciones  $canciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Cancion $cancion)
    {
        $tabla = 'canciones';
        $tablafk = null;
        $fk = null;

        return view('admin.canciones.edit', [
            'tabla' => $tabla,
            'tablafk' => $tablafk,
            'fk' => $fk,
            'dato' => $cancion,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Canciones  $canciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cancion $cancion)
    {
        $request->validate([
            'titulo' => 'required|string',
            'audio' => ['nullable', 'file', 'mimetypes:audio/ogg', 'max:10000'],
        ]);

        $audio = $cancion->audio;

        $cancion->update($request->all());

        if ($request->hasFile('audio')) {
            $audio = 'cancion_' . $cancion->id . $request->file('audio')->getClientOriginalExtension();

            $cancion->audio = str_replace(
                'public',
                'storage',
                $request->file('audio')->storeAs('public/canciones', $audio)
            );
        } else {
            $cancion->audio = $audio;
        }

        $cancion->save();

        return redirect()->route('admin.canciones.index')->with('success', 'Se ha modificado la canción con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Canciones  $canciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cancion $cancion)
    {
        $cancion->delete();

        return redirect()->route('admin.canciones.index')->with('success', 'Se ha eliminado la canción con éxito.');
    }
}
