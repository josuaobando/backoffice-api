<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class AuthJWT
{
  public function handle($request, Closure $next)
  {
    try{
      $user = JWTAuth::toUser($request->input('token'));
    }catch(Exception $e){
      if($e instanceof TokenInvalidException){
        return response()->json(['error' => 'Token is Invalid']);
      }else if($e instanceof TokenExpiredException){
        return response()->json(['error' => 'Token is Expired']);
      }else{
        return response()->json(['error' => 'Something is wrong']);
      }
    }
    return $next($request);
  }
}
