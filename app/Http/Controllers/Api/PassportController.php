<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;


class PassportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('register','login','logout');
    }
    
    public function register(Request $request)
    {
       
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if($validator->fails()){ 
         $result = [
             'errors' => $validator->errors()
         ]; 
        }
        else{
            $arr = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ];

            $user = User::create($arr);
            $user->token = $user->createToken('app')->accessToken;
            $result = $user;
            
        } 
        return response()->json($result);

    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
           $user = Auth::user();
           $user->token = $user->createToken('app')->accessToken;
           $result = $user;
        }
        else{
            $result = ['msg'=> 'access denied'];
        }
        return response()->json($result);
    
    }
    public function me()
    {
        $user = Auth::user();
        return response()->json($user);
    }
}
