<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class isAdmin
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
        foreach(Auth::user()->roles as $role){
            $user_role = $role->role;
         }
         if($user_role != 'admin'){
            return redirect('/home');
         }
        return $next($request);
    }
}
