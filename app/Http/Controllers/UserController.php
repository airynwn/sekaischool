<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use App\Models\Personaje;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        if (auth()->user()->admin) {
            return view('admin.users.index', [
                'users' => $users,
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    /**
     * Valida a un usuario
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function validar(User $user)
    {
        $user->valido = true;
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Se ha validado el usuario con éxito.');
    }

    /**
     * Bloquea a un usuario para impedir que pueda acceder a todo el sitio web
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function bloquear(User $user)
    {
        $user->valido = false;
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Se ha bloqueado el usuario con éxito.');
    }

    /**
     * Guarda una carta en el inventario del usuario
     *
     * @param  \App\Models\User  $user
     * @param  mixed $carta ID de la carta a guardar
     * @param  mixed $estado Estado de la carta ('colección' o 'deseo')
     * @return void
     */
    public function guardarCarta(Request $request)
    {
        $user = User::find(auth()->id());
        $carta = Carta::find($request->carta);
        $estado = $request->input('estado');

        if ($user->cartas()->where('carta_id', $carta->id)->exists()) {
            return response()->json(['info' => 'La carta ' . $carta->nombre . ' ya está en el inventario.'], 422);
        }

        $user->cartas()->attach($carta, ['estado' => $estado]);
        $user->save();

        $lista = $estado == 'coleccion' ? 'colección' : 'lista de deseos';


        return response()->json(['info' => 'Se ha añadido la carta ' . $carta->nombre . ' a la ' . $lista . ' con éxito.'], 200);

    }


}
