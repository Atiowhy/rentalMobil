<?php

namespace App\Http\Controllers;

use App\Models\Detail_orders;
use App\Models\Trans_orders;
use Illuminate\Http\Request;

class TransAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Table Transaksi";
        $datas = Trans_orders::with('customer')->get();
        return view('transaksi.index', compact('title', 'datas'));
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
        $title = "Detail Transaksi";
        $details = Detail_orders::with(['order.customer', 'car'])
                ->where('id_trans_order', $id)
                ->get();
                $transOrder = Trans_orders::with('customer')->find($id);
        // return($details);
        return view('transaksi.detail', compact('title', 'details', 'transOrder'));
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