<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer([
            'tampilan.kelas.*',
            'tampilan.dasbor',
            'tampilan.profil',
            'tampilan.tentang'
        ], function (\Illuminate\View\View $view) {
            $pengguna = Auth::user();

            $namaDepanPengguna = $pengguna->{'nama_depan'};
            $inisialPengguna = Str::substr($namaDepanPengguna, 0, 1);

            $view->with([
                'nama_depan_pengguna' => $namaDepanPengguna,
                'inisial_pengguna' => $inisialPengguna
            ]);
        });
    }
}
