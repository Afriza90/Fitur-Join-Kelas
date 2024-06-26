@extends('layouts.admin')

@section('main-content')
<div class="container">
    <article class="card mb-3">
        @if ($kelas->gambar_kelas)
        <img src="{{ asset('images/' . $kelas->gambar_kelas) }}" class="card-img" alt="{{ $kelas->nama_kelas }}">
        @endif
        <div class="card-img-overlay ml-3 mr-3 d-flex flex-column justify-content-start mt-2">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="card-title font-weight-bold text-white mb-0">{{ $kelas->nama_kelas }}</h2>
                <a href="{{ route('kelas.edit', ['id' => $kelas->id]) }}" class="btn btn-light btn-md font-weight-bold" style="z-index: 1; background-color: white ; color: rgb(191, 49, 49);">
                    <i class="fas fa-edit"></i> Edit Kelas
                </a>
            </div>
            <div class="card-text text-white font-weight-bold">
                <span class="mr-2"> Dibuat oleh {{ $kelas->user->name ?? 'Tidak diketahui' }} </span> |
                <span class="mr-2"> <i class="far fa-calendar ml-2 mr-2"> </i>{{ $kelas->created_at->format('j F Y') }}</span> |
                <span class="mr-2"> <i class="fas fa-shapes ml-2 mr-2"> </i> {{ $kelas->tingkat_kelas}}
            </div>
        </div>


        <div class="card-body ml-3 mr-3" style="z-index:1;">
            <h4 class="font-weight-bold mt-2 mb-2" style="color: rgb(191, 49, 49);">Tentang Kelas</h4>
            <p class="card-text text-justify mb-2" style="color: rgb(191, 49, 49);">{{ $kelas->deskripsi_kelas }}</p>
            <hr style="border-top: 1px solid rgba(191, 49, 49, 0.5);">
            <h4 class="font-weight-bold mt-2 mb-2" style="color: rgb(191, 49, 49);">Silabus Kelas</h4>
            @if ($kelas->silabus_kelas)
            <a href="{{ asset('pdfs/' . $kelas->silabus_kelas) }}" class="btn btn-light btn-md font-weight-bold mb-4" style="background-color: rgb(191, 49, 49); color: white;" target="_blank">
                <i class="fas fa-file-pdf mr-2"></i> Lihat Silabus
            </a>
            @else
            <p class="text-muted">Silabus belum tersedia.</p>
            @endif

        </div>
    </article>

    <!-- Tabs -->
    <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active font-weight-bold" style="color: rgb(191, 49, 49);" id="absensi-tab" data-toggle="tab" href="#absensi" role="tab" aria-controls="absensi" aria-selected="true">Absensi</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link font-weight-bold" style="color: rgb(191, 49, 49);" id="materi-tab" data-toggle="tab" href="#materi" role="tab" aria-controls="materi" aria-selected="false">Materi</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link font-weight-bold" style="color: rgb(191, 49, 49);" id="tugas-tab" data-toggle="tab" href="#tugas" role="tab" aria-controls="tugas" aria-selected="false">Tugas</a>
        </li>
    </ul>
</div>
@endsection
