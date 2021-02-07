<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdmin
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
      $user = $request->user();

      if ( in_array ( $user->role->role, ['Διαχειριστής'])){
      return $next($request);
      }
      return redirect('/home/0');
    }
}
