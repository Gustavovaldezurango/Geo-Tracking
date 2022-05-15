<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Validator;

class RegisterController extends Controller
{
    public function show(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|unique:users,email',
            'usename' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]);
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = $request->password;
        $user->username = $request->username;
        $user->save();

        return redirect('/login')->with('success', 'Account created successfully');
    }
}
