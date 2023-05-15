<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $modo = $request->modo;

        if ($modo === 'reciente') {
            $posts = Post::orderBy('created_at', 'desc')->get();
        } elseif ($modo === 'popular') {
            $posts = Post::withCount('fans')->orderBy('fans_count', 'desc')->get();
        } else {
            $posts = Post::all();
        }

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
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
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
        if ($post->user_id !== auth()->user()->id) {
            // return response()->json(['info' => 'No puedes eliminar este post.'], 403);
            return redirect()->route('pages.comunidad')->with('error', 'No puedes eliminar este post.');
        }

        $post->delete();

        // return response()->json(['info' => 'Se ha eliminado el post con éxito.'], 200);
        return redirect()->route('pages.comunidad')->with('success', 'Se ha eliminado el post con éxito.');
    }
}
