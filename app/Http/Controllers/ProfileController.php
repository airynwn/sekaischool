<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Grupo;
use App\Models\Personaje;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class ProfileController extends Controller
{
    /**
     * Muestra el perfil del usuario.
     */
    public function index(Request $request): View
    {

        $personajes = Personaje::all();
        $cartas = $request->user()->cartas()->where('estado', 'coleccion')->orderBy('rareza', 'desc')->get();

        return view('profile.index', [
            'user' => $request->user(),
            'personajes' => $personajes,
            'cartas' => $cartas,
        ]);
    }

    /**
     * Muestra el perfil de otro usuario.
     */
    public function show(Request $request)
    {
        $personajes = Personaje::all();
        $user = User::where('name', $request->user)->firstOrFail();
        $cartas = $user->cartas()->where('estado', 'coleccion')->orderBy('rareza', 'desc')->get();

        return view('profile.index', [
            'user' => $user,
            'cartas' => $cartas,
            'personajes' => $personajes,
        ]);
    }

    /**
     * Muestra el inventario del perfil del usuario.
     */
    public function inventario(Request $request)
    {
        $modo = $request->modo;
        $user = User::where('name', $request->user)->firstOrFail();

        if (isset($modo)) {
            $cartas = $user->cartas()->where('estado', $modo)->orderBy('rareza', 'desc')->get();
        }

        return view('profile.inventario', [
            'cartas' => $cartas,
            'user' => $user,
        ])->render();
    }

    /**
     * Display the user's profile form.
     */
    public function edit(): View
    {
        $personajes = Personaje::all();
        $grupos = Grupo::all();

        return view('profile.edit', [
            'user' => auth()->user(),
            'personajes' => $personajes,
            'grupos' => $grupos,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $request->validate([
            'biografia' => ['nullable', 'string', 'max:200'],
            'discord' => ['nullable', 'string', 'min:2', 'max:32', 'regex:/^((.{2,32})#\d{4})$/'],
            'twitter' => ['nullable', 'string', 'max:15', 'regex:/^@(\w){1,15}$/'],
            'pj_fav_id' => ['nullable', 'exists:personajes,id'],
            'grupo_fav_id' => ['nullable', 'exists:grupos,id'],
        ]);

        if ($request->hasFile('avatar')) {
            $destino = storage_path('app/public/avatars');
            $avatar = $request->file('avatar');
            $nombre = $avatar->getClientOriginalName();
            $avatar->move($destino, $nombre);

            $request->user()->update([
                'avatar' => 'avatars/' . $nombre,
            ]);
        }

        $request->user()->update([
            'biografia' => $request->biografia,
            'discord' => $request->discord,
            'twitter' => $request->twitter,
            'pj_fav_id' => $request->pj_fav_id,
            'grupo_fav_id' => $request->grupo_fav_id,
        ]);

        return redirect()->route('profile.index')->with('success', 'Se ha modificado el perfil con éxito.');
    }
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function descargarPDF(Request $request)
    {
        $user = $request->user();
        $data = [
            'user' => $user,
            'avatar' => public_path('storage/'.$user->avatar),
        ];

        $pdf = PDF::loadView('profile.pdf', $data);

        return $pdf->stream('perfil.pdf');
    }
}
