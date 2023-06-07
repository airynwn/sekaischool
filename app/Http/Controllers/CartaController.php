<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use App\Models\Grupo;
use App\Models\Personaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartas = Carta::orderBy('id')->paginate(4);
        $grupos = Grupo::all();
        $tablafk = Personaje::all();
        $fk = 'pj_id';

        if (auth()->check() && auth()->user()->admin && strpos(Route::current()->getName(), 'admin') === 0) {
            return view('admin.cartas.index', [
                'cartas' => $cartas,
                'tablafk' => $tablafk,
                'fk' => $fk
            ]);
        } else {
            return view('pages.cartas', [
                'cartas' => $cartas,
                'grupos' => $grupos,
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
        $request->validate([
            'nombre' => 'required|string',
            'rareza' => ['required', 'int', 'between:1,5'],
            'atributo' => ['required', 'string', 'in:cool,cute,happy,mysterious,pure'],
            'unidolized' => ['required', 'image', 'max:10000'],
            'idolized' => ['required', 'image', 'max:10000'],
            'unidolized_icon' => ['required', 'image', 'max:10000'],
            'idolized_icon' => ['required', 'image', 'max:10000'],
            'pj_id' => ['required', 'exists:personajes,id'],
        ]);

        $carta = Carta::create($request->all());

        $unidolized = $carta->id . '_1' . $request->file('unidolized')
            ->getClientOriginalExtension();

        $idolized = $carta->id . '_2' . $request->file('idolized')
            ->getClientOriginalExtension();

        $unidolized_icon = $carta->id . '_1_icon' . $request->file('unidolized_icon')
            ->getClientOriginalExtension();

        $idolized_icon = $carta->id . '_1_icon' . $request->file('unidolized_icon')
            ->getClientOriginalExtension();

        $carta->unidolized = str_replace(
            'public',
            'storage',
            $request->file('unidolized')->storeAs('public/cartas', $unidolized)
        );
        $carta->idolized = str_replace(
            'public',
            'storage',
            $request->file('idolized')->storeAs('public/cartas', $idolized)
        );
        $carta->unidolized_icon = str_replace(
            'public',
            'storage',
            $request->file('unidolized_icon')->storeAs('public/cartas', $unidolized_icon)
        );
        $carta->idolized_icon = str_replace(
            'public',
            'storage',
            $request->file('idolized_icon')->storeAs('public/cartas', $idolized_icon)
        );
        $carta->save();

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
        $request->validate([
            'nombre' => 'required|string',
            'rareza' => ['required', 'int', 'between:1,5'],
            'atributo' => ['required', 'string', 'in:cool,cute,happy,mysterious,pure'],
            'unidolized' => ['nullable', 'image', 'max:10000'],
            'idolized' => ['nullable', 'image', 'max:10000'],
            'unidolized_icon' => ['nullable', 'image', 'max:10000'],
            'idolized_icon' => ['nullable', 'image', 'max:10000'],
            'pj_id' => ['required', 'exists:personajes,id'],
        ]);

        $unidolized = $carta->unidolized;
        $idolized = $carta->idolized;
        $unidolized_icon = $carta->unidolized_icon;
        $idolized_icon = $carta->idolized_icon;

        $carta->update($request->all());

        if ($request->hasFile('unidolized')) {
            $unidolized = $carta->id . '_1' . $request->file('unidolized')
                ->getClientOriginalExtension();

            $carta->unidolized = str_replace(
                'public',
                'storage',
                $request->file('unidolized')->storeAs('public/cartas', $unidolized)
            );
        } else {
            $carta->unidolized = $unidolized;
        }

        if ($request->hasFile('idolized')) {
            $idolized = $carta->id . '_2' . $request->file('idolized')
                ->getClientOriginalExtension();

            $carta->idolized = str_replace(
                'public',
                'storage',
                $request->file('idolized')->storeAs('public/cartas', $idolized)
            );
        } else {
            $carta->idolized = $idolized;
        }

        if ($request->hasFile('unidolized_icon')) {
            $unidolized_icon = $carta->id . '_1_icon' . $request->file('unidolized_icon')
                ->getClientOriginalExtension();

            $carta->unidolized_icon = str_replace(
                'public',
                'storage',
                $request->file('unidolized_icon')->storeAs('public/cartas', $unidolized_icon)
            );
        } else {
            $carta->unidolized_icon = $unidolized_icon;
        }

        if ($request->hasFile('idolized_icon')) {
            $idolized_icon = $carta->id . '_2_icon' . $request->file('idolized_icon')
                ->getClientOriginalExtension();

            $carta->idolized_icon = str_replace(
                'public',
                'storage',
                $request->file('idolized_icon')->storeAs('public/cartas', $idolized_icon)
            );
        } else {
            $carta->idolized_icon = $idolized_icon;
        }

        $carta->save();

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
        $carta->delete();

        return redirect()->route('admin.cartas.index')->with('success', 'Se ha eliminado la carta con éxito.');
    }

    /**
     * Realiza una búsqueda de cartas filtrando por los
     * datos pasados a través del formulario y devuelve
     * la vista actualizada de forma asíncrona.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buscar(Request $request)
    {
        $grupos = Grupo::all();
        $tablafk = Personaje::all();
        $fk = 'pj_id';

        $buscarGrupos = json_decode($request->input('grupos'));
        $buscarRareza = json_decode($request->input('rareza'));
        $buscarAtributos = json_decode($request->input('atributos'));
        $buscarPjs = json_decode($request->input('pjs'));

        $cartas = Carta::when($buscarGrupos, function ($query) use ($buscarGrupos) {
            return $query->whereHas('personaje', function ($query) use ($buscarGrupos) {
                $query->whereIn('grupo_id', $buscarGrupos);
            });
        })
        ->when($buscarRareza, function ($query) use ($buscarRareza) {
            return $query->whereIn('rareza', $buscarRareza);
        })
        ->when($buscarAtributos, function ($query) use ($buscarAtributos) {
            return $query->whereIn('atributo', $buscarAtributos);
        })
        ->when($buscarPjs, function ($query) use ($buscarPjs) {
            return $query->whereIn('pj_id', $buscarPjs);
        })
        ->orderBy('id')->paginate(4);

        return view('pages.listaCartas', [
            'cartas' => $cartas,
            'grupos' => $grupos,
            'tablafk' => $tablafk,
            'fk' => $fk,
        ])->render();
    }
}
