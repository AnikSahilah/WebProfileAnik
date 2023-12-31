<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Biodata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Biodata::paginate(10); 
        
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        'jenis_kelamin' => 'required',
    ]);

    $biodata = new Biodata();
    $biodata->nama = $request->nama;
    $biodata->alamat = $request->alamat;
    $biodata->no_hp = $request->no_hp;
    $biodata->jenis_kelamin = $request->jenis_kelamin;
    $biodata->save();

    return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('update', compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('biodata.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        'jenis_kelamin' => 'required',
    ]);

    try {
        $biodata = Biodata::findOrFail($id);
    } catch (ModelNotFoundException $e) {
        return redirect()->back()->with('error', 'Data tidak ditemukan.');
    }

    $biodata->nama = $request->nama;
    $biodata->alamat = $request->alamat;
    $biodata->no_hp = $request->no_hp;
    $biodata->jenis_kelamin = $request->jenis_kelamin;

    $biodata->save();

    return redirect()->back()->with('success', 'Data berhasil diperbarui.');
}

    



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodata = Biodata::findOrFail($id);
        $biodata->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
