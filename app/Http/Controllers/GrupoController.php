<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::all()->sortBy('id');
        $tablafk = null;
        $fk = null;

        if (auth()->check() && auth()->user()->admin && strpos(Route::current()->getName(), 'admin') === 0) {
            return view('admin.grupos.index', [
                'grupos' => $grupos,
                'tablafk' => $tablafk,
                'fk' => $fk
            ]);
        } else {
            return view('pages.grupos', [
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
        $tabla = 'grupos';
        $tablafk = null;
        $fk = null;
        return view('admin.grupos.create', [
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
            'logo' => ['required', 'image', 'max:200'],
            'imagen' => ['required', 'image', 'max:3000'],
            'historia' => 'required|string',
        ]);

        $grupo = Grupo::create($request->all());
        $logo = 'logo-' . $grupo->nombre . '.' . $request->file('logo')
            ->getClientOriginalExtension();
        $imagen = 'img-' . $grupo->nombre . '.' . $request->file('imagen')
            ->getClientOriginalExtension();
        $grupo->logo = str_replace(
            'public',
            'storage',
            $request->file('logo')->storeAs('public/grupos', $logo)
        );
        $grupo->imagen = str_replace(
            'public',
            'storage',
            $request->file('imagen')->storeAs('public/grupos', $imagen)
        );
        $grupo->save();

        return redirect()->route('admin.grupos.index')->with('success', 'Se ha creado el grupo con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->input('grupo');
        $grupo = Grupo::find($id);

        return view('pages.grupo', [
            'grupo' => $grupo,
            'post' => true,
        ])->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupo $grupo)
    {
        $tabla = 'grupos';
        $tablafk = null;
        $fk = null;

        return view('admin.grupos.edit', [
            'tabla' => $tabla,
            'tablafk' => $tablafk,
            'fk' => $fk,
            'dato' => $grupo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupo $grupo)
    {
        $request->validate([
            'nombre' => 'required|string',
            'logo' => ['nullable', 'image', 'max:200'],
            'imagen' => ['nullable', 'image', 'max:3000'],
            'historia' => 'required|string',
        ]);

        $logo = $grupo->logo;
        $imagen = $grupo->imagen;

        $grupo->update($request->all());

        if ($request->hasFile('logo')) {
            // Extensión (.png ...) de la imagen
            $logo = 'logo-' . $grupo->nombre . '.' . $request->file('logo')
            ->getClientOriginalExtension();
            // Guarda la imagen como logo-nombregrupo.extension
            $grupo->logo = str_replace(
                'public',
                'storage',
                $request->file('logo')->storeAs('public/grupos', $logo)
            );
        } else {
            $grupo->logo = $logo;
        }

        if ($request->hasFile('imagen')) {
            $imagen = 'img-' . $grupo->nombre . '.' . $request->file('imagen')
            ->getClientOriginalExtension();

            $grupo->imagen = str_replace(
                'public',
                'storage',
                $request->file('imagen')->storeAs('public/grupos', $imagen)
            );
        } else {
            $grupo->imagen = $imagen;
        }

        $grupo->save();

        return redirect()->route('admin.grupos.index')->with('success', 'Se ha modificado el grupo con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo $grupo)
    {
        if ($grupo->personajes->count() > 0) {
            return redirect()->route('admin.grupos.index')
            ->with('error', 'El grupo no se puede eliminar mientras tenga personajes.');
        }

        $grupo->delete();

        return redirect()->route('admin.grupos.index')->with('success', 'Se ha eliminado el grupo con éxito.');
    }
}
