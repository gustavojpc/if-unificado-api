<?php

namespace App\Http\Middleware;
use Tymon\JWTAuth\Exceptions\InvalidClaimException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;


class apiProtectRoute extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (\Exception $e) {
            if($e instanceof TokenInvalidException ) {
                return response()->json(['status' => 'Token is Invalid']);
            } else if ($e instanceof TokenExpiredException) {
                // If the token is expired, then it will be refreshed and added to the headers
                try
                {
                  $refreshed = JWTAuth::refresh(JWTAuth::getToken());
                  $user = JWTAuth::setToken($refreshed)->toUser();
                  $request->headers->set('Authorization','Bearer'.$refreshed);
                }catch (JWTException $e){
                    return response()->json(['status' => 'Token is Expired']);
                }
            } else {
                return response()->json(['status' => 'Autorization Token not found']);
            }
        }
        return $next($request);
    }
}
