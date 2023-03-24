<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function postLogin(Request $request) {
        // dd($request->all());
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/beranda');
        } else {
            return redirect('/login');
        }
    }

    public function postLogout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
