<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index() {
        return view('superadmin.index');
    }
    public function destinasi() {
        $data = Destination::all();
        return view('superadmin.page.destinasi',compact('data'));
        //Destination::where('user_id', Auth::user()->id)->get(); 
    }
    public function create_destinasi() {
        return view('superadmin.page.create_destinasi');
    }

    public function insert_destinasi(Request $request) {
        Destination::create($request->all());
        return redirect()->route('Sdestinasi');
    }



    public function edit_destinasi() {
        return view('superadmin.page.edit_destinasi');
    }
    public function update_destinasi($id) {
        $data = Destination::find($id);
        dd($data);
        return view('superadmin.page.edit_destinasi',compact('data'));
    }




    public function umkm() {
        return view('superadmin.page.umkm');
    }
}
