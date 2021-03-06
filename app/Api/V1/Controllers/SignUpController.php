<?php

namespace Famly\Api\V1\Controllers;

use Illuminate\Support\Facades\Config;
use Famly\User;
use Tymon\JWTAuth\JWTAuth;
use Famly\Http\Controllers\Controller;
use Famly\Api\V1\Requests\SignUpRequest;
use Symfony\Component\HttpKernel\Exception\HttpException;

class SignUpController extends Controller
{
    public function signUp(SignUpRequest $request, JWTAuth $JWTAuth)
    {
        $user = new User($request->all());
        if(!$user->save()) {
            throw new HttpException(500);
        }

        if(!Config::get('boilerplate.sign_up.release_token')) {
            return response()->json([
                'status' => 'ok',
                'user' => $user
            ], 201);
        }

        $token = $JWTAuth->fromUser($user);
        return response()->json([
            'status' => 'ok',
            'token' => $token,
            'user' => $user
        ], 201);
    }
}
