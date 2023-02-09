<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\CekUser;

class LoginController extends Controller
{
    public function login() {
        return view('login.login');
    }
    public function index(){
        if($user == Auth::user()){
            if($user->role == 'admin'){
                return redirect()->intended('welcome');
            } elseif ($user->role == 'kasir'){
                return redirect()->intended('cashier');
            }
        }
        return view('login.login');
    }

    public function proses(Requset $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min6|max8'
        ],
            [
                'email.required' => 'Email tidak boleh kosong',
            ]
    );

        $kredensial = $request->only('email', 'password');

        if(Auth::attempt($kredensial)){
            $request->session()->regenereate();
            $user = Auth::user();
            if($user == Auth::user()){
                if($user->role == 'admin'){
                    return redirect()->intended('welcome');
                } elseif ($user->role == 'kasir'){
                    return redirect()->intended('cashier');
                }
                return redirect()->intended('/login');
            }
            
        }

        return back()->withErrors([
            'email' => 'Maaf email atau password anda salah',
        ])->onlyInput('email');
    }
}
