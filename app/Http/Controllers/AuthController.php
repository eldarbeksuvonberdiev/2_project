<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginPage(){
        return view('userpages.user_login');
    }

    public function registerPage(){
        return view('userpages.user_register');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('tologin');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);
        
        if(Auth::attempt(['email'=> $request->email,'password' => $request->password])){
            return redirect()->route('category.index');
        }
        return redirect()->route('tologin');
    }

    public function register(Request $request){
         
    }
}
