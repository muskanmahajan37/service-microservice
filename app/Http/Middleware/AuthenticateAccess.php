<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class AuthenticateAccess
{
    public function handle($request, Closure $next)
    {
        $validSecrets = explode(',', env('ACCEPTED_SECRET'));
        if (in_array($request->header('ApiAccessKey'), $validSecrets, true)) {

            return $next($request);
        }
        abort(Response::HTTP_UNAUTHORIZED);

    }
}
