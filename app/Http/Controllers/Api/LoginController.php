<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //login
    public function Login(Request $request){
        $this->validateLogin($request);
        //true
        if (Auth::attempt($request->only('email','password'))) {
           
            return response()->json([
                'token' =>$request->user()->createToken($request->device)->plainTextToken,
                'message' =>'Success'
            ]);

        }
        //false
        return response()->json([
            'message'=>'Unauthorized'
        ],401);
        
    }
    //validate
    public function validateLogin(Request $request){
        return $request->validate([
        'email'=>'required|email',
        'password'=>'required',
        'device'=>'required', 
        ]);
    } 
}
