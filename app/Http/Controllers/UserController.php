<?php

namespace App\Http\Controllers;

use App\Models\Levels;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data User';
        $dataUsers = User::with('levelName')->get();
        return view('user.index', compact('title', 'dataUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data User";
        $dataLevels = Levels::get();
        return view('user.create', compact('title', 'dataLevels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        User::create($request->all());
        return redirect()->to('user');
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
        $title = 'Edit Data Users';
        $data = User::find($id);
        $levels = Levels::get();
        // return $levels;
        return view('user.edit', compact('title', 'data', 'levels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = User::find($id);
        if($request->password){
            User::where('id', $id)->update([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'id_level' => $request->id_level,
            ]);
        } else {
            User::where('id', $id)->update([
                'username' => $request->username,
                'email' => $request->email,
                'password' => $data->password,
                'id_level' => $request->id_level,
            ]);
        }
        $data->save();
        return redirect()->to('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect()->to('user');

   }
}