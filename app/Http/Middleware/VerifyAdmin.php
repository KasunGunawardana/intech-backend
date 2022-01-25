<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!auth()->user()->isAdmin()) {
            session()->flash('error', 'You don\'t have permission to view \'User\' module!');

            return redirect(route('home'));
        }
        return $next($request);
    }
}
