<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photoumkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'umkmphoto',
        'umkm_id',
    ];
    public function umkms()
    {
        return $this->belongsTo(Umkm::class);
    }
}
