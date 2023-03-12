<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinasi = Destinasi::latest()->get();
        return response()->json([
            'data' => $destinasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'wilayah' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image->storeAs('public/image', $image->hashName());
        
            $destinasi = new Destinasi();
            $destinasi->nama = $request->nama;
            $destinasi->alamat = $request->alamat;
            $destinasi->deskripsi = $request->deskripsi;
            $destinasi->wilayah = $request->wilayah;
            $destinasi->kategori = $request->kategori;
            $destinasi->gambar = $image->hashName();
            $destinasi->save();
    
            return response()->json([
                'data' => $destinasi
            ]);
        } else {
            return response()->json([
                'message' => 'Please provide both image and video files'
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $destinasi = Destinasi::find($id);
        return response()->json([
            'data' => $destinasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'deskripsi' => 'required',
        'wilayah' => 'required',
        'kategori' => 'required',
    ]);
        $destinasi = Destinasi::find($id);
        $destinasi->nama = $request->nama;
        $destinasi->alamat = $request->alamat;
        $destinasi->deskripsi = $request->deskripsi;
        $destinasi->wilayah = $request->wilayah;
        $destinasi->kategori = $request->kategori;
        $destinasi->save();

        return response()->json([
            'data' => $destinasi
        ]);
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        $destinasi->delete();
        return response()->json([
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
