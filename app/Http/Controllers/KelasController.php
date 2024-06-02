<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Materi;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class KelasController extends Controller
{
    public function indeks(): Factory|\Illuminate\Foundation\Application|View|Application
    {
        $kelas = Kelas::query()->orderBy('nama_kelas');
        $kelas = $kelas->get();

        return view('tampilan.kelas.indeks', [
            'kelas' => $kelas
        ]);
    }

    public function tambah(): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('tampilan.kelas.tambah');
    }

    public function prosesTambah(Request $request): RedirectResponse
    {
        $request->validate([
            'nama-kelas' => [
                'required',
                'string',
                'max:50'
            ],
            'nama-singkat' => [
                'required',
                'string',
                'max:10'
            ],
            'tingkat-kelas' => [
                'required',
                'string',
                'in:Beginner,Intermediate,Advanced,Expert,Professional'
            ],
            'deskripsi' => [
                'required',
                'string'
            ],
            'sampul' => [
                'image',
                'mimes:gif,jpg,jpeg,png,svg',
                'max:2048'
            ],
            'silabus' => [
                'nullable',
                'mimes:pdf',
                'max:2048'
            ],
        ]);

        $kelas = new Kelas();

        $kelas->{'id_pengguna'} = Auth::user()->getAuthIdentifier();
        $kelas->{'uuid'} = Str::uuid();
        $kelas->{'nama_kelas'} = $request->input('nama-kelas');
        $kelas->{'nama_singkat'} = $request->input('nama-singkat');
        $kelas->{'tingkat_kelas'} = $request->input('tingkat-kelas');
        $kelas->{'deskripsi'} = $request->input('deskripsi');

        if ($request->hasFile('sampul')) {
            $namaSampul = sprintf('%s.%s', time(), $request->file('sampul')->extension());

            $request->file('sampul')->move(public_path('storage/sampul'), $namaSampul);

            $kelas->{'sampul'} = $namaSampul;
        }

        if ($request->hasFile('silabus')) {
            $namaPDF = sprintf('%s.%s', time(), $request->file('silabus')->extension());

            $request->file('silabus')->move(public_path('storage/silabus'), $namaPDF);

            $kelas->{'silabus'} = $namaPDF;
        }

        $kelas->save();

        return to_route('kelas');
    }

    public function detail(Request $request, string $uuid): Factory|\Illuminate\Foundation\Application|View|Application
    {
        $kelas = Kelas::query()->where('uuid', '=', $uuid);
        $kelas = $kelas->firstOrFail();

        $idKelas = $kelas->{'id_kelas'};

        $cari = $request->query('cari');

        $materi = Materi::query()->where('id_kelas', '=', $idKelas);

        if ($cari) {
            $materi = $materi->where('nama_materi', 'like', sprintf('%%%s%%', Str::lower($cari)));
        }

        $materi = $materi->orderBy('tanggal_dibuat', 'desc');
        $materi = $materi->get();

        return view('tampilan.kelas.detail', [
            'kelas' => $kelas,
            'materi' => $materi
        ]);
    }

    public function edit(string $uuid): Factory|\Illuminate\Foundation\Application|View|Application
    {
        $kelas = Kelas::query()->where('uuid', '=', $uuid);
        $kelas = $kelas->firstOrFail();

        return view('tampilan.kelas.edit', [
            'kelas' => $kelas
        ]);
    }

    public function prosesEdit(Request $request, string $uuid)
    {
        $request->validate([
            'nama-kelas' => [
                'required',
                'string',
                'max:50'
            ],
            'nama-singkat' => [
                'required',
                'string',
                'max:10'
            ],
            'tingkat-kelas' => [
                'required',
                'string',
                'in:Beginner,Intermediate,Advanced,Expert,Professional'
            ],
            'deskripsi' => [
                'required',
                'string'
            ],
            'sampul' => [
                'image',
                'mimes:gif,jpg,jpeg,png,svg',
                'max:2048'
            ],
            'silabus' => [
                'nullable',
                'mimes:pdf',
                'max:2048'
            ],
        ]);

        $kelas = Kelas::query()->where('uuid', '=', $uuid);

        if ($kelas->exists()) {
            $nilai = [
                'nama_kelas' => $request->input('nama-kelas'),
                'nama_singkat' => $request->input('nama-singkat'),
                'tingkat_kelas' => $request->input('tingkat-kelas'),
                'deskripsi' => $request->input('deskripsi')
            ];

            if ($request->hasFile('sampul')) {
                $namaSampul = sprintf('%s.%s', time(), $request->file('sampul')->extension());

                $request->file('sampul')->move(public_path('storage/sampul'), $namaSampul);

                $nilai['sampul'] = $namaSampul;
            }

            if ($request->hasFile('silabus')) {
                $namaPDF = sprintf('%s.%s', time(), $request->file('silabus')->extension());

                $request->file('silabus')->move(public_path('storage/silabus'), $namaPDF);

                $nilai['silabus'] = $namaPDF;
            }

            $kelas->update($nilai);

            return to_route('kelas');
        }

        abort(404);
    }

    public function hapus(string $uuid): RedirectResponse
    {
        $kelas = Kelas::query()->where('uuid', '=', $uuid);

        $kelas->delete();

        return to_route('kelas');
    }
}
