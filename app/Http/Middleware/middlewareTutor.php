<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class middlewareTutor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        switch (auth::user()->rol) {
            case 'admin':
                return $next($request);
                break;
            case 'tutorado':
                return redirect('areas');
                break;
            case 'docente':
                return redirect('asignatura');
                break;
            default:
                # code...
                break;
        }
        //return $next($request);
    }
}
