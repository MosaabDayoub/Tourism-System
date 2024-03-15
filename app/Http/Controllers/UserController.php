<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{
  function register(Request $request){
    $newUser=User::Create([
        "name"=>$request->input("name"),
        "image_refrence"=>$request->input("image_refrence"),
        "email"=>$request->input("email"),
        "password"=>$request->input("password"),
    ]);
    return $newUser;
}
function login(Request $request){
          $user=User::where("email",$request->input("email"))->first();
          if(!$user){
            return response()->json(["message" => "User Not Found"],401);
          }
          if(!password_verify($request->input("password"), $user->password)){
            return response()->json(["message" => "Wrong password"], 401);
          }
          $token=$user->createtoken("auth_token");
          return response()->json(["token" => $token->plainTextToken]);
}          
}