<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EditProfile extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Your Profile";
        $userId = session('id_customer');
        $customer = Customer::find($userId);

        return view('front.profile.index', compact('title', 'customer'));
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
        $title = 'Edit Profile';
        $data = Customer::findOrFail($id);
        return view('front.profile.edit', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $edit = Customer::findOrFail($id);
        if ($request->hasFile('foto')) {
    // Cek apakah ada foto lama yang perlu dihapus
    if ($edit->foto) {
        $oldImagePath = public_path('images/' . $edit->foto);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath); // Hapus gambar lama
        }
    }

    // Upload gambar baru
    $imageName = time() . '.' . $request->foto->extension();
    $request->foto->move(public_path('images'), $imageName);

    // Perbarui kolom foto di database
    $edit->foto = $imageName;
}
        $edit->customer_name = $request->customer_name;
        $edit->phone = $request->phone;
        $edit->email = $request->email;
        $edit->sim_number = $request->sim_number;
        if($request->filled('password')){
            $edit->password = Hash::make($request->password);
        } else {
            $edit->password = $edit->password;
        }
        $edit->address = $request->address;
        // $edit->foto = $request->foto;
        $edit->save();

        return redirect()->to('front');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}