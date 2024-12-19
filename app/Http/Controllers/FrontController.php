<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Customer;
use Illuminate\Http\Request;

class frontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataCars = Car::simplePaginate(3);
        $dataCustomer = Customer::get();
        // return $dataCars;
        return view('front.layout.index', compact('dataCars', 'dataCustomer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('front.layout.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Data Mobil";
        $data = Car::findOrFail($id);
        return view('front.layout.detailCars', compact('title', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}