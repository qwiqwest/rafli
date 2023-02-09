<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if($user = Auth::user()){
            if($user->role == 'admin'){
                return redirect()->intended('beranda');
            }elseif($user->role == 'kasir'){
                return redirect()->intended('kasir');
            }
        }
        return view('login.login');
    }

    public function proses(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
            [
                'email.required'=>'Email tidak boleh kosong',
            ]        
    );

    $kredensial = $request->only('email','password');

    if(Auth::attempt($kredensial)){
        $request->session()->regenerate();
        $user = Auth::user();
        if($user->role == 'admin'){
            return redirect()->intended('beranda');
        }elseif($user->role == 'kasir'){
            return redirect()->intended('kasir');
        }
        return redirect()->intended('/');
    }

        return back()->withErrors([
            'email' => 'Maaf email atau password salah'
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request-session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
