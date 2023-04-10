<?php

namespace App\Http\Controllers;

use App\Models\destination;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function home(){
        $home = Auth::user();
        return view('home', compact('home'));
    }

    public function admin(){
        return view('admin.home');
    }
    public function contri(){
        return view('contributor.home');
    }

    public function destinasi(Request $request){
        if($request ->has('filter_kategori', 'keyword')){
            $destinasi = Destination::where('dest_name', 'LIKE', '%' . $request->keyword . '%')
            ->where('dest_category', '=', $request->filter_kategori)->paginate(6);
        } else {
            $destinasi = Destination::paginate(6);
        }
        return view('destinasi',compact('destinasi'));
    }

    public function umkm(Request $request){
        if($request ->has('filter_kategori', 'keyword')){
            $umkm = Umkm::where('umkm_kategori', 'LIKE', '%' . $request->keyword . '%')
            ->where('umkm_kategori', '=', $request->filter_kategori)->paginate(8);
        } else {
            $umkm = Umkm::paginate(8);
        }
        return view('umkm', compact('umkm'));
    }

    public function detail($id){
        $destinasi = Destination::findOrFail($id);
        return view('detaildestinasi', compact('destinasi'));
    }

    public function detailUmkm($id){
        $umkm = Umkm::findOrFail($id);
        return view('detailumkm', compact('umkm'));
    }

    // public function filter(Request $request){
    //      if($request ->has('filter_kategori', 'keyword')){
    //         $destinasi = destination::where('dest_name', 'LIKE', '%' . $request->keyword . '%')
    //         ->where('dest_category', '=', '%' . $request->filter_kategori)->paginate(6);
    //     } else {
    //         $destinasi = destination::paginate(6);
    //     }
    //     return view('destinasi', compact('destinasi'));
    // }

    // public function filterUmkm(Request $request){
    //     if ($request->has('filter_kategori')) {
    //         $umkm = Umkm::where('umkm_kategori', 'LIKE', '%' . $request->filter_kategori . '%')
    //             ->paginate(6);
    //     }
    //     else {
    //         $umkm = Umkm::paginate(6);
    //     }
    //     return view('umkm', compact('umkm'));
    // }
}
