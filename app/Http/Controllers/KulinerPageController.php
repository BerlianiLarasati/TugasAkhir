<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KulinerPageController extends Controller
{
    public function kuliner(Request $request)
        {
        $kuliner= Kuliner::where('nama', 'like', "%" . $request->search . "%")->get();
        // $kuliner = Kuliner::all();
        return view('kuliner', ['kuliner'=>$kuliner]);
        // return view('kuliner',compact('kuliner'));
        }
}