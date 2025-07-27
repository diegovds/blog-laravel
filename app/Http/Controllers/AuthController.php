<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(Request $request){
        $request -> validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => Hash::make($request -> password),
        ]);

        $token = $user -> createToken($user -> id. '-' .$user -> email) -> plainTextToken;

        return response() -> json([
            'user' => $user,
            'token' => $token,
        ], 201);
    }

    public function signin(Request $request){
        $request -> validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::where('email', $request -> email) -> first();

        if (!$user || !Hash::check($request -> password, $user -> password)) {
            return response() -> json(['error' => 'Falha de autenticação'], 401);
        }

        $token = $user -> createToken($user -> id . '-' . $user -> email) -> plainTextToken;

        return response() -> json([
            'user' => [
                'id' => $user -> id,
                'name' => $user -> name,
                'email' => $user -> email
            ],
            'token' => $token,
        ]);
    }

    public function validate(Request $request){
        $user = $request -> user();

        return response() -> json([
            'user' => [
                'id' => $user -> id,
                'name' => $user -> name,
                'email' => $user -> email
            ]
        ]);
    }
}
