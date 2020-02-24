<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class PrimeiroMiddleware
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
        Log::debug('Passou pelo primeiro middleware ANTES');
        //return response('Parando a cadeia de chamadas');
        $response = $next($request);
        Log::debug('Passou pelo primeiro middleware DEPOIS');
        // return $response;
        return response('Alterei a resposta', 201);
    }
}
