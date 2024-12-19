<?php

namespace App\Http\Controllers;

use App\Models\Levels;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function create()
    {
        $DataLevels = Levels::get();
        return view('auth.register', compact('DataLevels'));
    }

    public function actionRegis(Request $request)
    {
        User::create([
            "id_level" => $request->id_level,
            "username" => $request->username,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);
        return redirect()->route('login');
    }
}
