<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'umkm_produk',
        'umkm_kategori',
        'umkm_toko',
        'umkm_alamat',
        'umkm_kontak',
        'umkm_onlineshop',
        'umkm_cover',
        'umkm_deskripsi'
    ];

    public function photoumkms()
    {
        return $this->hasMany(Photoumkm::class);
    }

}
