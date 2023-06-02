<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use App\Models\Personaje;
use App\Models\Post;
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
        $users = User::orderBy('id')->paginate(10);

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

    /**
     * Guarda una carta en el inventario del usuario
     *
     * @param  \App\Models\User  $user
     * @param  mixed $carta ID de la carta a guardar
     * @param  mixed $estado Estado de la carta ('colección' o 'deseo')
     * @return void
     */
    public function eliminarCarta(Request $request)
    {
        $user = User::find(auth()->id());
        $carta = Carta::find($request->carta);

        if (!$user->cartas()->where('carta_id', $carta->id)->exists()) {
            return response()->json(['info' => 'La carta ' . $carta->nombre . ' no está en el inventario.'], 422);
        }

        $user->cartas()->detach($carta);
        $user->save();

        return response()->json(['info' => 'Se ha eliminado la carta ' . $carta->nombre . ' del inventario.'], 200);
    }

    public function valorarPost(Request $request)
    {
        $user = User::find(auth()->id());
        $post = Post::find($request->post);

        if ($user->favs()->where('post_id', $post->id)->exists()) {
            return response()->json(['info' => 'Ya has valorado este post.'], 422);
        }

        $user->favs()->attach($post);
        $user->save();

        return response()->json(['info' => 'Has valorado positivamente el post.'], 200);
    }
}
