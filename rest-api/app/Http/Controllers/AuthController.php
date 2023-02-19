<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        //Validation
        $fields = $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|min:8|confirmed'
        ]);

        //create
        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        //create token
        $token = $user->createToken('myapptoken')->plainTextToken;

        //show data user and token
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);
    }
    
    // function logout(Request $request)
    // {
    //     //delete token
    //     // auth()->user()->tokens()->delete();
    //     Auth::user()->tokens()->delete();

    //     //message
    //     return [
    //         'message' => 'Logged out'
    //     ];
    // }
    public function logout(User $user){

        $user->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }

    function login(Request $request)
    {
        //Validation
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string|min:8'
        ]);

        //Check email
        $user = User::where('email',$fields['email'])->first();
        //Check password
        $password = Hash::check($fields['password'], $user->password);

        //Check usr if exist
        if(!$user || !$password){
            return response([
                'message => This account not exist!'
            ],401);
        }

        //create token
        $token = $user->createToken('myapptoken')->plainTextToken;

        //show data user and token
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);
    }

}
