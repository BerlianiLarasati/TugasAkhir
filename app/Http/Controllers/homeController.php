<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\User;
use App\Models\destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function home(){
        $home = Auth::user();
        return view('home', compact('home'));
    }

    public function admin(){
        $user = DB::table('users')
        ->where('role','=','administrator')
        ->count();

        $contri = DB::table('users')
        ->where('role','=','contributor')
        ->count();

        $dest = DB::table('destinations')
        ->count();

        $umkm = DB::table('umkms')
        ->count();

        return view('admin.home', compact('user','contri','dest','umkm'));
    }
    public function contri(){
        $user = DB::table('users')
            ->where('role', '=', 'administrator')
            ->count();

        $contri = DB::table('users')
            ->where('role', '=', 'contributor')
            ->count();

        $dest = DB::table('destinations')
            ->count();

        $umkm = DB::table('umkms')
            ->count();

        return view('contributor.home', compact('user', 'contri', 'dest', 'umkm'));
    }

    public function destinasi(Request $request){
        if($request ->has('filter_kategori', 'keyword')){
            $destinasi = destination::where('dest_name', 'LIKE', '%' . $request->keyword . '%')
            ->where('dest_category', '=', $request->filter_kategori)->paginate(6);
        } else {
            $destinasi = destination::paginate(6);
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
        $destinasi = destination::findOrFail($id);
        return view('detaildestinasi', compact('destinasi'));
    }

    public function detailUmkm($id){
        $umkm = Umkm::findOrFail($id);
        return view('detailumkm', compact('umkm'));
    }
}
