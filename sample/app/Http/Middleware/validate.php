<?php

namespace App\Http\Middleware;

use Closure;

class validate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
    $rules=[
            
            'name'=>'required',
            'mark1'=>'required|Integer',
            'mark2'=>'required|Integer',
            'mark3'=>'required|Integer'];
            if (array_has($rules,$request->rules)) {
                return redirect('student');
        
        return $next($request);
    }
}
}
