<?php

namespace App\Http\Middleware;

use Closure;

class ValidUser
{
    public function handle($request, Closure $next)
    {
        if (auth()->user()->valido) {
            return $next($request);
        }

        session()->flash('error', 'Acceso denegado.');
        return redirect()->back();
    }
}
