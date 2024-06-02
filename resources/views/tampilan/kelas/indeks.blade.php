@extends('struktur.dasar')
@section('konten')
    <div class="row">
        <div class="col-lg-6">
            @foreach ($kelas as $k)
                <a class="text-decoration-none" href="{{ route('kelas.detail', ['uuid' => $k->uuid]) }}">
                    <div @class(['bg-transparent border-danger card', 'mb-3' => !$loop->last])>
                        <div class="card-body">
                            <div
                                class="btn btn-light btn-md font-weight-bold position-absolute"
                                style="right: 20px; top: 20px; z-index: 1"
                            >
                                <a
                                    class="btn btn-light btn-md font-weight-bold"
                                    href="{{ route('kelas.hapus', ['uuid' => $k->uuid]) }}"
                                    style="background-color: white; color: rgb(191, 49, 49)"
                                ><i class="fas fa-trash"></i> Hapus Kelas</a>
                            </div>
                            <div class="align-items-center row">
                                <div @class(['col-12' => !$k->ilustrasi, 'col-lg-8 col-md-6' => $k->ilustrasi])>
                                    <h2 class="font-weight-bold text-danger">{{ $k->nama_kelas }}</h2>
                                    <small class="d-block font-weight-bold mb-3 text-danger">Grade B-4</small>
                                    <a
                                        class="btn btn-outline-danger font-weight-bold"
                                        href="{{ route('kelas.detail', ['uuid' => $k->uuid]) }}"
                                    ><i class="fa fa-edit"></i> Join</a>
                                </div>
                                @if ($k->ilustrasi)
                                    <div class="col-lg-4 col-md-6 d-md-block d-none">
                                        <img
                                            alt="Ilustrasi"
                                            class="w-100"
                                            src="data:image/png;base64,{{ base64_decode($k->ilustrasi) }}"
                                        >
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            <div class="justify-content-center mt-5 row">
                <a
                    href="{{ route('kelas.tambah') }}"
                    class="btn btn-light font-weight-bold"
                    style="background-color: rgb(191, 49, 49); color: white"
                ><i class="fas fa-plus mr-2"></i> Buat Kelas</a>
            </div>
        </div>
        <div class="col-lg-6"></div>
    </div>
@endsection
