<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\Photoumkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CumkmController extends Controller
{
    public function indexUmkmc()
    {
        $user = Auth::user()->id;
        $umkm = Umkm::paginate(2);
        return view('contributor.umkm.home', compact('umkm'));
    }

    public function tambahUmkmc()
    {
        return view('contributor.umkm.tambah');
    }

    public function storeUmkmc(Request $request)
    {

        if ($request->hasFile('cover')) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("cover/"), $imageName);
            $data = Umkm::create([
                'umkm_produk' => $request->umkm_produk,
                'umkm_kategori' => $request->umkm_kategori,
                'umkm_toko' => $request->umkm_toko,
                'umkm_alamat' => $request->umkm_alamat,
                'umkm_kontak' => $request->umkm_kontak,
                'umkm_onlineshop' => $request->umkm_onlineshop,
                'umkm_deskripsi' => $request->umkm_deskripsi,
                'umkm_cover' => $imageName,
            ]);
            $data->save();
        }

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request['umkm_id'] = $data->id;
                $request['umkmphoto'] = $imageName;
                $file->move(\public_path("umkm/"), $imageName);
                Photoumkm::create($request->all());
            }
        }

        return redirect()->route('umkmc');
    }

    public function editUmkmc($id)
    {
        $umkm = Umkm::findOrFail($id);
        return view('contributor.umkm.edit', compact('umkm'));
    }

    public function updateUmkmc(Request $request, $id)
    {
        $umkm = Umkm::findOrFail($id);
        if ($request->hasFile("cover")) {
            if (File::exists("cover/" . $umkm->umkm_cover)) {
                File::delete("cover/" . $umkm->umkm_cover);
            }
            $file = $request->file("cover");
            $umkm->umkm_cover = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/cover"), $umkm->umkm_cover);
            $request['cover'] = $umkm->umkm_cover;
        }
        $umkm->update([
            'umkm_produk' => $request->umkm_produk,
            'umkm_kategori' => $request->umkm_kategori,
            'umkm_toko' => $request->umkm_toko,
            'umkm_alamat' => $request->umkm_alamat,
            'umkm_kontak' => $request->umkm_kontak,
            'umkm_onlineshop' => $request->umkm_onlineshop,
            'umkm_deskripsi' => $request->umkm_deskripsi,
            'umkm_cover' => $umkm->umkm_cover,
        ]);

        $photoumkms =  $umkm->photoumkms;
        foreach ($photoumkms as $photo) {
            if (!$photo) {
                continue;
            }

            $img_id = 'image_' . $photo->id;

            if ($request->has($img_id)) {
                $newPhoto = $request[$img_id];
                $photoDest = Photoumkm::findOrFail($photo->id);
                $imageName = time() . '_' . $newPhoto->getClientOriginalName();
                $newPhoto->move(\public_path("/umkm"), $imageName);
                $photoDest->update([
                    'umkmphoto' => $imageName,
                ]);
            }
        }

        return redirect()->route('umkmc');
    }

    public function deleteUmkmc($id)
    {
        $umkm = Umkm::findOrFail($id);
        $photoumkms = Photoumkm::where("umkm_id", $umkm->id)->get();

        foreach ($photoumkms as $photo) {
            if (File::exists('umkm/' . $photo->umkmphoto)) {
                File::delete("umkm/" . $photo->umkmphoto);
            }
        }
        // destination::destroy($id);
        $umkm->delete();
        return back();
    }

    public function searchUmkmc(Request $request)
    {
        if ($request->search) {
            $umkm =  Umkm::where('umkm_produk', 'LIKE', '%' . $request->search . '%')
                ->orWhere('umkm_kategori', 'LIKE', '%' . $request->search . '%')
                ->orWhere('umkm_toko', 'LIKE', '%' . $request->search . '%')
                ->orWhere('umkm_alamat', 'LIKE', '%' . $request->search . '%')
                ->orWhere('umkm_kontak', 'LIKE', '%' . $request->search . '%')
                ->orWhere('umkm_onlineshop', 'LIKE', '%' . $request->search . '%')
                ->paginate(2);
        } else {
            $umkm = Umkm::all();
        }

        return view('contributor.umkm.home', compact('umkm'));
    }
}
