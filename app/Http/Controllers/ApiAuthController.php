<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;

class ApiAuthController extends Controller
{
  public function userAuth(Request $request)
  {
    $token = null;
    try
    {
      $credentials = $request->only('email', 'password');
      $token = JWTAuth::attempt($credentials);
      if(!$token)
      {
        return response()->json(['error' => 'invalid_credentials'], 500);
      }
    }
    catch(JWTException $exception)
    {
      return response()->json(['error' => $exception->getMessage()], 500);
    }

    return response()->json(compact('token'));
  }
}
