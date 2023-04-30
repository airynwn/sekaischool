<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::all();
        $tablafk = null;
        $fk = null;

        if (auth()->user()->admin) {
            return view('admin.grupos.index', [
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
        $grupo = $request->validate([
            'nombre' => 'required|string',
            'logo' => 'required|string',
            'imagen' => 'required|string',
            'historia' => 'required|string',
        ]);

        Grupo::create($grupo);

        return redirect()->route('admin.grupos.index')->with('success', 'Se ha creado el grupo con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function show(Grupo $grupo)
    {
        //
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
            'logo' => 'required|string',
            'imagen' => 'required|string',
            'historia' => 'required|string',
        ]);

        $grupo->update($request->all());

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
