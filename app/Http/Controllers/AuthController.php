<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Student;

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
         if(!$user){
            return redirect(route('registration'))->with('error','login details are not valid');
         }
         return redirect(route('login'))->with('succeed','registration success, Login to access the app');
    }


    public function login(){
        return view ('auth.login');
    }

    public function loginPost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            $student=Student::all();
            return view('student.index')->with('student',$student);
        }
        return redirect (route('login'))->with('error','login insuccess');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }

}
