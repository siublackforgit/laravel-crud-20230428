<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function registration(){
        return view ('auth.registration');
    }

    public function registrationPost (Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email'=>'required|email|unique:users',
                'password'=>'required'
            ]
            );

         $data['name']=$request->name;
         $data['email']=$request->email;
         $data['password']=hash::make($request->password);
         $user = User::create($data);

         return redirect('login');
    }


    public function login(){
        return view ('auth.login');
    }
}
