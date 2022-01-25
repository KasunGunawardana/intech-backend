<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\Instructor;

class VerifyInstructorCount
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
        if(Instructor::all()->count() == 0 ) {
            
            session()->flash('error', 'You need to add at least one Instructor to be able to create an instructor!');

            return redirect(route('courses.index'));
        }
        return $next($request);
    }
}
