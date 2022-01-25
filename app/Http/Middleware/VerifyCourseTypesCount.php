<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\CourseType;

class VerifyCourseTypesCount
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
        if(CourseType::all()->count() == 0 ) {
            
            session()->flash('error', 'You need to add at least one Course Type to be able to create a course!');

            return redirect(route('courses.index'));
        }
        return $next($request);
    }
}
