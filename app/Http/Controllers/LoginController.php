<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function actionLogin(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if(Auth::attempt($credentials)){
            return redirect()->to('dashboard');
        } else {
            return back()->with('Error', 'Email atau password salah')->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->to('login');
    }

}
