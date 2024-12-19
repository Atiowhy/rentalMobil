<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Customer;
use App\Models\Detail_orders;
use App\Models\Trans_orders;
use Illuminate\Http\Request;

class TransOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Transaksi Rental';
        $dataCars = Car::simplePaginate(4);
        $customers = Customer::get();
          $order = Trans_orders::get()->last();
        $id_order = $order->id ?? '';
        $id_order++;
        $order_code = "M" . "-" . date('dmY') . "/" . sprintf("%03s", $id_order);
        $transDate = date('y-m-d');
        return view('front.order.create', compact('title', 'dataCars', 'customers', 'order_code', 'transDate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $cars = Car::get();
        // $customers = Customer::get();
        // return view('front.order.create', compact('cars', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $order = Trans_orders::create($request->all());

        foreach ($request->id_car as $key => $val) {
            Detail_orders::create([
                'id_trans_order' => $order->id,
                'id_car' => $request->id_car[$key],
                'qty' => $request->qty[$key],
                'price' => $request->price[$key],
                'subtotal' => $request->subtotal[$key]
            ]); //mengirim data ke table order detail
        }
        // return $order;
        return redirect()->to('front');
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