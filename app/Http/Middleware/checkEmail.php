<?php

namespace App\Http\Middleware;

use Closure;


class checkEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$mail)
    {
        if($request->has('email')){
            if(request('email') == $mail){
                return redirect('error');
            }
        }
        return $next($request);
    }
}
