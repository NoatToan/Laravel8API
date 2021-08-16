<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     * @throws \Exception
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            if (!JWTAuth::parseToken()->authenticate()) {
                throw new TokenInvalidException;
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Invalid Token']);
        }
        return $next($request);
    }
}
