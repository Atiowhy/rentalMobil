<?php

namespace App\Http\Controllers;

use App\Models\Levels;
use Illuminate\Http\Request;

class LevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Level';
        $DataLevels =  Levels::orderBy('id', 'desc')->get();
        // return $DataLevels;
        return view('level.index', compact('title', 'DataLevels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Data Level';
        return view('level.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Levels::create($request->all());
        return redirect()->to('level');
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
        $title = 'Edit Data Level';
        $dataLevel = Levels::find($id);
        return view('level.edit', compact('title', 'dataLevel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Levels::find($id);
        $data->nama_level = $request->nama_level;
        $data->save();
        return redirect()->to('level');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Levels::find($id)->delete();
        return redirect()->to('level');
    }
}
