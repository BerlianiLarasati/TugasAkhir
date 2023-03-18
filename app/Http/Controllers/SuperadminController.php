<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index() {
        return view('superadmin.index');
    }

    public function umkm() {
        return view('superadmin.index');
    }

    public function destinasi() {
        return view('superadmin.index');
    }
}
