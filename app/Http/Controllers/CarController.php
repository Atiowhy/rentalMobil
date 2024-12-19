<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Status;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Cars";
        $datas = Car::orderBy('id', 'desc')->get();
        return view('mobil.index', compact('title', 'datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add Cars";
        $status = Status::get();
        return view('mobil.create', compact('title', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'foto' => 'required|image|mimes:png,jpg,jpeg|max:1080',
        // ]);
        $imageName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('images'), $imageName);

        $car = Car::create([
            'merk'=>$request->merk,
            'car_name'=>$request->car_name,
            'mileage'=>$request->mileage,
            'transmition'=>$request->transmition,
            'lugage'=>$request->lugage,
            'feature'=>$request->feature,
            'color'=>$request->color,
            'seats'=>$request->seats,
            'year'=>$request->year,
            'fuel'=>$request->fuel,
            'description'=>$request->description,
            'id_status'=>$request->id_status,
            'foto'=>$imageName,
            'price'=>$request->price,
        ]);
        // return $car;

        // Car::create($request->all());
        return redirect()->to('car')->with('success', 'add success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Data Mobil";
        $data = Car::findOrFail($id);
        // return $data;
        return view('mobil.detail', compact('title', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Data Cars';
        $dataEdit = Car::findOrFail($id);
        $status = Status::get();
        // return $status;
        return $dataEdit;
        return view('mobil.edit', compact('title', 'dataEdit', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $car = Car::findOrFail($id);

        // jika ada gambar yang ingin di ubah
        if($request->hasFile('foto')){
            //hapus gambar lama jika ada
            if($car->foto){
                $oldImagePath = public_path('images/'.$car->foto);
                if(file_exists($oldImagePath)){
                    unlink($oldImagePath);
                }
            }
            // upload gambar baru
            $imageName = time().'.'.$request->foto->extention();
            $request->foto->move(public_path('images'), $imageName);
            $car->foto = $imageName; //perbarui gambar
        }

        // update data mobil
        // $car->merk = $request->merk;
        // $car->car_name = $request->car_name;
        $car->mileage = $request->mileage;
        $car->transmition = $request->transmition;
        $car->lugage = $request->lugage;
        $car->feature = $request->feature;
        $car->color = $request->color;
        $car->seats = $request->seats;
        $car->year = $request->year;
        $car->fuel = $request->fuel;
        $car->description = $request->description;
        $car->id_status = $request->id_status;
        $car->price = $request->price;

        // simpan pembaruan
        $car->save();

        return redirect()->to('car')->with('success', 'update success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::findOrFail($id)->delete();
        return redirect()->to('car');
    }
}