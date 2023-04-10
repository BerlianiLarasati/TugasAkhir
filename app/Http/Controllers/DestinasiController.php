<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class TeamController extends Controller
{
    public function team()
    {
        return view('team');
    }
}