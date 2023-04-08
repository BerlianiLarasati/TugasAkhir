<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KulinerPageController extends Controller
{
    public function kuliner(Request $request)
        {
        $kuliner= Kuliner::where('nama', 'like', "%" . $request->keyword . "%")
        ->where('kategori', '=', $request->filter_kategori) ->get();;
        return view('kuliner', compact('kuliner'));
        // return view('kuliner',compact('kuliner'));
        }
}