<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Personaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personajes = Personaje::all()->sortBy('id');
        $tablafk = Grupo::all();
        $fk = 'grupo_id';

        if (auth()->check() && auth()->user()->admin && strpos(Route::current()->getName(), 'admin') === 0) {
            return view('admin.personajes.index', [
                'personajes' => $personajes,
                'tablafk' => $tablafk,
                'fk' => $fk
            ]);
        } else {
            return view('pages.personajes', [
                'personajes' => $personajes,
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
        $request->validate([
            'nombre' => 'required|string',
            'historia' => 'required|string',
            'personalidad' => 'required|string',
            'imagen' => 'required|string',
            'comic' => 'required|string',
            'chibi' => 'required|string',
            'icon' => 'required|string',
            'stamp' => 'required|string',
            'sticker' => 'required|string',
            'grupo_id' => ['required', 'exists:grupos,id'],
        ]);

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
    public function show(Request $request)
    {
        $id = $request->input('personaje');
        $personaje = Personaje::find($id);

        return view('pages.personaje', [
            'personaje' => $personaje,
            'post' => true,
        ])->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Personaje $personaje)
    {
        $tabla = 'personajes';
        $tablafk = Grupo::all();
        $fk = 'grupo_id';

        return view('admin.personajes.edit', [
            'tabla' => $tabla,
            'tablafk' => $tablafk,
            'fk' => $fk,
            'dato' => $personaje
        ]);
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
        $request->validate([
            'nombre' => 'required|string',
            'historia' => 'required|string',
            'personalidad' => 'required|string',
            'imagen' => 'required|string',
            'comic' => 'required|string',
            'chibi' => 'required|string',
            'icon' => 'required|string',
            'stamp' => 'required|string',
            'sticker' => 'required|string',
            'grupo_id' => ['required', 'exists:grupos,id'],
        ]);

        $personaje->update([
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

        return redirect()->route('admin.personajes.index')->with('success', 'Se ha modificado el personaje con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personaje $personaje)
    {
        if ($personaje->cartas->count() > 0) {
            return redirect()->route('admin.personajes.index')
            ->with('error', 'El personaje no se puede eliminar mientras tenga cartas.');
        }

        $personaje->delete();

        return redirect()->route('admin.personajes.index')->with('success', 'Se ha eliminado el personaje con éxito.');
    }
}
