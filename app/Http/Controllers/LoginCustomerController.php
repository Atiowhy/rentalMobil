<?php

namespace App\Http\Controllers;

// use Illuminate\Container\Attributes\Auth;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginCustomerController extends Controller
{
    public function index()
    {
        return view('front.auth.login');
    }

    public function actionLoginCustomer(Request $request)
    {
       $credentials = $request->only(['email', 'password']);
        $customer = Customer::where('email', $credentials['email'])->first();
        if($customer && Hash::check($credentials['password'], $customer->password)){
            session()->put('customer_name', $customer->customer_name);
            session()->put('id_customer', $customer->id);
            session()->put('foto', $customer->foto);
            // dd(session()->all());
            return redirect()->to('/');
        } else {
            return back()->with('Error', 'Email atau password salah')->withInput();
        }
    }
}