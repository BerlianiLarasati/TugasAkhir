<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index(Request $request) {
        // menghasilkan data seperti tadi dari return dimasukin ke dolar data
        // ya ini ngambil nama seperti di search trus di get
        $data= Umkm::where('nama', 'like', "%" . $request->search . "%")->get();
        // return $data; 
        // $data= Umkm::all();
        return view('umkm', ['products'=>$data] );
    }
}
