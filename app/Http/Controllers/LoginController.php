<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    // public function 

    public function login(Request $request) {
        $input = $request->all();
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|min:3|max:8'
        ]);
        

        if(Auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password']))) {
                if(Auth()->user()->role == 'admin') {
                    return redirect('admin');  
                } else if (Auth()->user()->role == 'kasir') {
                    return redirect('kasir');
                } else {
                    return redirect('/')->with('error','Input proper email or password.');
                } 
        } else {
            return redirect('/')->with('error','Input proper email or password.');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // return view('login.login');
        // return redirect('/');
        return redirect('/')->with('success','Kamu telah berhasil logout');
    }

    }