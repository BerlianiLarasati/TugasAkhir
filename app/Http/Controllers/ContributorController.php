<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContributorController extends Controller
{
    public function index() {
        return view('contributor.page.index');
    }
    public function destinasi() {
        return view('contributor.page.destinasi');
    }
    public function create_destinasi() {
        return view('contributor.page.create_destinasi');
    }
    public function edit_destinasi() {
        return view('contributor.page.edit_destinasi');
    }
    public function umkm() {
        return view('contributor.page.umkm');
    }
}
