<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\CodeCleaner\ReturnTypePass;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Customers";
        $datas = Customer::orderBy('id', 'desc')->get();
        return view('customer.index', compact('title', 'datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Customer";
        return view('customer.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect()->to('customer');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Data Customer';
        $dataCus = Customer::find($id);
        return view('customer.edit', compact('title', 'dataCus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataUpdate = Customer::findOrFail($id);

        $dataUpdate->customer_name = $request->customer_name;
        $dataUpdate->nik = $request->nik;
        $dataUpdate->phone = $request->phone;
        $dataUpdate->email = $request->email;
        $dataUpdate->address = $request->address;
        $dataUpdate->save();

        return redirect()->to('customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Customer::findOrFail($id)->delete();
        return redirect()->to('customer');
    }

    public function logoutCust(){
        Auth::logout();
        return redirect()->to('loginCust');
    }
}