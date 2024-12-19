<?php

namespace App\Http\Controllers;

use App\Models\Detail_orders;
use App\Models\Trans_orders;
use Illuminate\Http\Request;

class OrderUser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Your Order';
        $customerId = session('id_customer');
        $orders = Trans_orders::with('customer')->where('id_customer', $customerId)->get();
        $detailOrder = Detail_orders::with('car')->whereIn('id_trans_order', $orders->pluck('id'))->get();
        // return $orders;
        return view('front.orderUser.index', compact('title', 'orders', 'detailOrder'));
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
        //
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