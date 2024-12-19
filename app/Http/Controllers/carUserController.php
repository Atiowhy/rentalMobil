<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class carUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Car::simplePaginate(3);
        return view('front.car.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = 'Our Cars';
        $data = Car::findOrFail($id);
        return view('front.car.detail', compact('title', 'data'));
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
        //
    }
}
