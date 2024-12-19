<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisCustomerController extends Controller
{
    public function index(){
        return view('front.auth.register');
    }

    public function regisCustomer(Request $request){
        Customer::create([
            "customer_name" => $request->customer_name,
            "phone" => $request->phone,
            "email" => $request->email,
            "sim_number" => $request->sim_number,
            "address" => $request->address,
            "password" => Hash::make($request->password),
            "foto"=>$request->foto
        ]);
        return redirect()->route('loginCust');
    }
}