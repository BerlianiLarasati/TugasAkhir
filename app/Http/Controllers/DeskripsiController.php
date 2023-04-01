<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeskripsiController extends Controller
{
    public function museumpendidikan()
    {
        return view('deskripsi.museumpendidikan');
    }

    public function tehrosella()
    {
        return view('deskripsi.tehrosella');
    }
}