<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function indeks()
    {
        return view('tampilan.tentang');
    }
}
