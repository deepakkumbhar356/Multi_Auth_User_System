<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType)
    {     
        if(auth()->user()->type == $userType){
            return $next($request);
        }
         return response()->json(['You do not have permission to access for this page']);
    }
}
