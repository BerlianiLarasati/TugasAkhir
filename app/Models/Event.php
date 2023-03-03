<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'user_id',
        'address',
        'address_url',
        'description',
        'event_date',
        'penyelenggara',
    ];
}
