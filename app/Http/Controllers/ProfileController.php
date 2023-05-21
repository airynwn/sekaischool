<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Grupo;
use App\Models\Personaje;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Muestra el perfil del usuario.
     */
    public function index(Request $request): View
    {
        $personajes = Personaje::all();

        return view('profile.index', [
            'user' => $request->user(),
            'personajes' => $personajes,
        ]);
    }


    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $personajes = Personaje::all();
        $grupos = Grupo::all();

        return view('profile.edit', [
            'user' => $request->user(),
            'personajes' => $personajes,
            'grupos' => $grupos,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
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
}
