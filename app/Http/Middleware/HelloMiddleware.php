<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $data = [
          ['name'=>'taro', 'mail'=>'taro@yamada'],
          ['name'=>'hanako', 'mail'=>'hanako@yamada'],
          ['name'=>'sachiko', 'mail'=>'sachiko@yamada'],
          ['name'=>'yasuko', 'mail'=>'yasuko@yamada']
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
