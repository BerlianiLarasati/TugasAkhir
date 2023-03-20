<?php

namespace App\Http\Controllers;

use App\Models\umkm_category;
use Illuminate\Http\Request;

class UmkmCategoryController extends Controller
{
    public function index(Request $request) {
        // menghasilkan data seperti tadi dari return dimasukin ke dolar data
        // ya ini ngambil nama seperti di search trus di get
        $data= umkm_category::where('nama', 'like', "%" . $request->search . "%")->get();
        // return $data; 
        // $data= Umkm::all();
        return view('umkm_category', ['umkmcategory'=>$data] );
    }
}
