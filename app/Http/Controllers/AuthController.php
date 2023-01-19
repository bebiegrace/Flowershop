<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){

        $validateData = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);

        $user =User::where('email', $validateData['email'])->first();

        // $token = $user->createToken('api');

        if($user && Hash::check($validateData['password'],$user->password)){
            $token =$user->createToken('api',['create']);
        return[

            // 'token'=>$token->plainTextToken,
           'greetings'=> 'Welcome to our Flowershop!! Your source of unique and beautiful flowers! Enjoy purchasing!!!'
        ];

        }
        else {
            return[
                'error'=>'Invalid Credentials! Please try again.'
            ];
        }

    }

}
