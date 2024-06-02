<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProfilController extends Controller
{
    public function indeks(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('tampilan.profil');
    }
}
