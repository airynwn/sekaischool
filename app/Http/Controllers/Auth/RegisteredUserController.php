<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Grupo;
use App\Models\Personaje;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $personajes = Personaje::all();
        $grupos = Grupo::all();

        return view('auth.register', [
            'personajes' => $personajes,
            'grupos' => $grupos,
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:16', 'not_in:edit'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Password::min(8)->letters()->numbers()],
            'biografia' => ['nullable', 'string', 'max:200'],
            'cumple' => ['nullable', 'date', 'before_or_equal:today'],
            'discord' => ['nullable', 'string', 'min:2', 'max:32', 'regex:/^((.{2,32})#\d{4})$/'],
            'twitter' => ['nullable', 'string', 'max:15', 'regex:/^@(\w){1,15}$/'],
            'pj_fav_id' => ['nullable', 'exists:personajes,id'],
            'grupo_fav_id' => ['nullable', 'exists:grupos,id'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'biografia' => $request->biografia,
            'cumple' => $request->cumple,
            'discord' => $request->discord,
            'twitter' => $request->twitter,
            'pj_fav_id' => $request->pj_fav_id,
            'grupo_fav_id' => $request->grupo_fav_id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
