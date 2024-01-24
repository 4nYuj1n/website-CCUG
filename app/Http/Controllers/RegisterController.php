<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showRegisterForm(Request $request){
        return view('auth.register');
    }

    public function register(request $request){

        $data=$request->all();
        $data['role']=2;

        $user=User::create($data);
        return redirect()->route('login')->with('success','user created');
    }
}
