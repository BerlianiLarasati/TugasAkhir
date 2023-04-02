<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinasiController extends Controller
{
    //
    public function destinasi(Request $request)
    {
        
        $destinasi = Destination::where('name', 'like', '%' .$request->keyword. '%')
        ->where('kategori', '=', $request->filter_kategori) ->get();
        return view('destinasi', compact('destinasi'));
    }
        
}