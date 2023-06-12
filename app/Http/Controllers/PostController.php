<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Vista Comunidad.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(50)->get();

        return view('pages.comunidad', ['posts' => $posts]);
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
        Post::create([
            'contenido' => $request->contenido,
            'user_id' => $request->user_id,
        ]);

        return response()->json(['info' => 'Se ha enviado el post con éxito.'], 200);
    }

    /**
     * Muestra los posts ordenados por reciente/popular según el botón seleccionado.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $modo = $request->modo;

        if ($modo === 'popular' && Post::whereHas('fans')->count() > 0) {
            $posts = Post::withCount('fans')->orderBy('fans_count', 'desc')->limit(50)->get();
        } else {
            $posts = Post::orderBy('created_at', 'desc')->limit(50)->get();
        }

        return view('pages.posts', ['posts' => $posts])->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (($post->user_id !== auth()->user()->id) && !auth()->user()->admin) {
            return response()->json(['info' => 'No puedes eliminar este post.'], 403);
        }

        $post->delete();

        return response()->json(['info' => 'Se ha eliminado el post con éxito.'], 200);
    }
}
