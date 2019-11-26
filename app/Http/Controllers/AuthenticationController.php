<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Lcobucci\JWT\Parser;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($request->password == $user->password) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $responce = ['token' => $token];
                return response($responce, 200);
            } else {
                $response = 'Password Missmatch';
                return response($response, 422);
            }
        } else {
            $respose = 'User doesn\'t exist';
            return responce($responce, 422);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        $request->user()->token()->delete();

        $response = 'You have been successfully logged out';
        return response($response, 200);
    }
}
