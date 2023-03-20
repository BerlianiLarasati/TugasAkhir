<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class ContributorController extends Controller
{
    public function index() {
        return view('contributor.page.index');
    }
    public function destinasi() {
        $data = Destination::all();
        return view('contributor.page.destinasi',compact('data'));
        //Destination::where('user_id', Auth::user()->id)->get(); 
    }
    public function create_destinasi() {
        return view('contributor.page.create_destinasi');
    }

    public function insert_destinasi(Request $request) {
        Destination::create($request->all());
        return redirect()->route('Cdestinasi');
    }



    public function edit_destinasi() {
        return view('contributor.page.edit_destinasi');
    }
    public function update_destinasi($id) {
        $data = Destination::find($id);
        dd($data);
        return view('contributor.page.edit_destinasi',compact('data'));
    }




    public function umkm() {
        return view('contributor.page.umkm');
    }

    public function create_umkm()
    {
        return view('contributor.page.create_umkm');
    }
}
