<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Umkm;

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


    // note get data by id for update destination
    public function FunctionName($id)
    {
        $destinasi = Destination::find($id);
        // return...
    }

    
    
    
    
    // fitur for CRUD UMKM

    // get all data umkm
    public function umkm() {
        $umkm = Umkm::all();
        return view('contributor.page.umkm',compact('umkm'));
    }

    // get data by id UMKM
    public function viewById($id)
    {
        $umkm = Umkm::find($id);
        // return 
    }

    // insert umkm
    public function insert_umkm(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'address' => 'required',
            'shop_name' => 'required',
            'description' => 'required',
            'contact' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $image->storeAs('public/umkm', $image->hashName());
            
            $umkm = new Umkm();
            $umkm->nama = $request->nama;
            $umkm->address = $request->address;
            $umkm->shop_name = $request->shop_name;
            $umkm->description = $request->description;
            $umkm->contact = $request->contact;
            $umkm->image = $image->hashName();

            $umkm->save();     
            
            
            // bantu route nya yah kak
            return redirect()->route('nama_route');

        }else{
            return response('Please input your image', 400);
        }
    }

    // update umkm
    public function updateUmkm(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'address' => 'required',
            'shop_name' => 'required',
            'description' => 'required',
            'contact' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
        
            $image->storeAs('public/umkm', $image->hashName());
        
            $umkm = Umkm::find($id);
        
            // Hapus image lama
            Storage::delete('public/umkm/' . $umkm->image);
        
            $umkm->nama = $request->nama;
            $umkm->address = $request->address;
            $umkm->shop_name = $request->shop_name;
            $umkm->description = $request->description;
            $umkm->contact = $request->contact;
            $umkm->image = $image->hashName();
        
            $umkm->save();
        
            // bantu routenya kak
            return redirect()->route('nama_route');
        } else {
            return response('please input your image', 400);
        }
    }


    // delete umkm
    public function deleteUmkm($id)
    {
        $umkm = Umkm::find($id);
        $umkm->delete();

    }
}
