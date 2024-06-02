<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutentikasiController extends Controller
{
    public function masuk(): Factory|\Illuminate\Foundation\Application|View|RedirectResponse|Application
    {
        if (Auth::check()) {
            return to_route('dasbor');
        }

        return view('tampilan.autentikasi.masuk');
    }

    public function prosesMasuk(Request $request): RedirectResponse
    {
        $alamatSurel = $request->input('alamat-surel');
        $kataSandi = $request->input('kata-sandi');
        $ingatSaya = $request->input('ingat-saya');

        if (Auth::attempt(['email' => $alamatSurel, 'password' => $kataSandi], $ingatSaya)) {
            $request->session()->regenerate();

            return to_route('dasbor');
        }

        return back();
    }

    public function daftar(): Factory|\Illuminate\Foundation\Application|View|RedirectResponse|Application//
    {
        if (Auth::check()) {
            return to_route('dasbor');
        }

        return view('tampilan.autentikasi.daftar');
    }

    public function prosesDaftar(Request $request)
    {
        $request->validate([
            'nama-depan' => [
                'required',
                'string',
                'max:30'
            ],
            'nama-belakang' => [
                'required',
                'string',
                'max:30'
            ],
            'alamat-surel' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:App\Models\Pengguna,email'
            ],
            'kata-sandi' => [
                'required',
                'string',
                'min:8'
            ],
            'konfirmasi-kata-sandi' => [
                'required',
                'string',
                'same:kata-sandi'
            ]
        ]);

        $alamatSurel = $request->input('alamat-surel');
        $kataSandi = Hash::make($request->input('kata-sandi'));
        $namaDepan = $request->input('nama-depan');
        $namaBelakang = $request->input('nama-belakang');

        $pengguna = new Pengguna();

        $pengguna->{'email'} = $alamatSurel;
        $pengguna->{'password'} = $kataSandi;
        $pengguna->{'nama_depan'} = $namaDepan;
        $pengguna->{'nama_belakang'} = $namaBelakang;

        $pengguna->save();

        return to_route('autentikasi.masuk');
    }

    public function keluar(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('autentikasi.masuk');
    }
}
