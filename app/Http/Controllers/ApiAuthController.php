<?php

namespace App\Http\Controllers;

use JWTAuth;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;

class ApiAuthController extends Controller
{

  public function authenticate(Request $request)
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
      else
      {
        $user = JWTAuth::toUser($token);
        $userInformation = $user->attributesToArray();
        $username = $userInformation['name'];
      }

      $loginInformation = array('token' => $token, 'name' => $username);
    }
    catch(JWTException $exception)
    {
      return response()->json(['error' => $exception->getMessage()], 500);
    }

    return response()->json(compact('loginInformation'));
  }

}
