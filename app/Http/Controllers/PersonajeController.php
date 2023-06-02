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
            'imagen' => ['required', 'image', 'max:3000'],
            'comic' => ['required', 'image', 'max:500'],
            'chibi' => ['required', 'image', 'max:200'],
            'icon' => ['required', 'image', 'max:300'],
            'stamp' => ['required', 'image', 'max:300'],
            'sticker' => ['required', 'image', 'max:200'],
            'grupo_id' => ['required', 'exists:grupos,id'],
        ]);

        $personaje = Personaje::create($request->all());
        $nombrepj = strtolower(explode(' ', $personaje->nombre)[0]);

        // IMAGEN
        $imagen = 'img-' . $nombrepj . '.' . $request->file('imagen')
            ->getClientOriginalExtension();
        $personaje->imagen = str_replace(
            'public',
            'storage',
            $request->file('imagen')->storeAs('public/personajes', $imagen)
        );
        // COMIC
        $comic = 'comic-' . $nombrepj . '.' . $request->file('comic')
            ->getClientOriginalExtension();
        $personaje->comic = str_replace(
            'public',
            'storage',
            $request->file('comic')->storeAs('public/personajes', $comic)
        );
        // CHIBI
        $chibi = 'chibi-' . $nombrepj . '.' . $request->file('chibi')
            ->getClientOriginalExtension();
        $personaje->chibi = str_replace(
            'public',
            'storage',
            $request->file('chibi')->storeAs('public/personajes', $chibi)
        );
        // ICON
        $icon = 'icon-' . $nombrepj . '.' . $request->file('icon')
            ->getClientOriginalExtension();
        $personaje->icon = str_replace(
            'public',
            'storage',
            $request->file('icon')->storeAs('public/personajes', $icon)
        );
        // STAMP
        $stamp = 'stamp-' . $nombrepj . '.' . $request->file('stamp')
            ->getClientOriginalExtension();
        $personaje->stamp = str_replace(
            'public',
            'storage',
            $request->file('stamp')->storeAs('public/personajes', $stamp)
        );
        // STICKER
        $sticker = 'sticker-' . $nombrepj . '.' . $request->file('sticker')
            ->getClientOriginalExtension();
        $personaje->sticker = str_replace(
            'public',
            'storage',
            $request->file('sticker')->storeAs('public/personajes', $sticker)
        );

        $personaje->save();

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
            'imagen' => ['nullable', 'image', 'max:3000'],
            'comic' => ['nullable', 'image', 'max:500'],
            'chibi' => ['nullable', 'image', 'max:200'],
            'icon' => ['nullable', 'image', 'max:300'],
            'stamp' => ['nullable', 'image', 'max:300'],
            'sticker' => ['nullable', 'image', 'max:200'],
            'grupo_id' => ['required', 'exists:grupos,id'],
        ]);

        $nombrepj = strtolower(explode(' ', $personaje->nombre)[0]);

        $imagen = $personaje->imagen;
        $comic = $personaje->comic;
        $chibi = $personaje->chibi;
        $icon = $personaje->icon;
        $stamp = $personaje->stamp;
        $sticker = $personaje->sticker;

        $personaje->update($request->all());

        if ($request->hasFile('imagen')) {
            $imagen = 'img-' . $nombrepj . '.' . $request->file('imagen')
            ->getClientOriginalExtension();

            $personaje->imagen = str_replace(
                'public',
                'storage',
                $request->file('imagen')->storeAs('public/personajes', $imagen)
            );
        } else {
            $personaje->imagen = $imagen;
        }

        if ($request->hasFile('comic')) {
            $comic = 'comic-' . $nombrepj . '.' . $request->file('comic')
            ->getClientOriginalExtension();

            $personaje->comic = str_replace(
                'public',
                'storage',
                $request->file('comic')->storeAs('public/personajes', $comic)
            );
        } else {
            $personaje->comic = $comic;
        }

        if ($request->hasFile('chibi')) {
            $chibi = 'chibi-' . $nombrepj . '.' . $request->file('chibi')
            ->getClientOriginalExtension();

            $personaje->chibi = str_replace(
                'public',
                'storage',
                $request->file('chibi')->storeAs('public/personajes', $chibi)
            );
        } else {
            $personaje->chibi = $chibi;
        }

        if ($request->hasFile('icon')) {
            $icon = 'icon-' . $nombrepj . '.' . $request->file('icon')
            ->getClientOriginalExtension();

            $personaje->icon = str_replace(
                'public',
                'storage',
                $request->file('icon')->storeAs('public/personajes', $icon)
            );
        } else {
            $personaje->icon = $icon;
        }

        if ($request->hasFile('stamp')) {
            $stamp = 'stamp-' . $nombrepj . '.' . $request->file('stamp')
            ->getClientOriginalExtension();

            $personaje->stamp = str_replace(
                'public',
                'storage',
                $request->file('stamp')->storeAs('public/personajes', $stamp)
            );
        } else {
            $personaje->stamp = $stamp;
        }

        if ($request->hasFile('sticker')) {
            $sticker = 'sticker-' . $nombrepj . '.' . $request->file('sticker')
            ->getClientOriginalExtension();

            $personaje->sticker = str_replace(
                'public',
                'storage',
                $request->file('sticker')->storeAs('public/personajes', $sticker)
            );
        } else {
            $personaje->sticker = $sticker;
        }

        $personaje->save();

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
