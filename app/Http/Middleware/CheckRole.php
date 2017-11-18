<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
      $user=Auth::user();
      if($user==null){
        return redirect('/');
      }else if ($user->role_id != $role) {
        return redirect('/');
      }
        return $next($request);
    }
}
