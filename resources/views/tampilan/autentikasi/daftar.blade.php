@extends('struktur.dasar')
@push('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush
@section('konten')
    <div class="container">
        <div class="justify-content-center row">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-lg-block d-none">
                                <img alt="Logo" src="{{ asset('img/unsiclass.jpg') }}">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 mb-4 text-gray-900">Daftar</h1>
                                    </div>
                                    <form class="user" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input
                                                autofocus
                                                class="form-control form-control-user"
                                                name="nama-depan"
                                                placeholder="Nama depan"
                                                required
                                                type="text"
                                                value="{{ old('nama-depan') }}"
                                            >
                                        </div>
                                        <div class="form-group">
                                            <input
                                                class="form-control form-control-user"
                                                name="nama-belakang"
                                                placeholder="Nama belakang"
                                                required
                                                type="text"
                                                value="{{ old('nama-belakang') }}"
                                            >
                                        </div>
                                        <div class="form-group">
                                            <input
                                                class="form-control form-control-user"
                                                name="alamat-surel"
                                                placeholder="Alamat surel"
                                                required
                                                type="email"
                                                value="{{ old('alamat-surel') }}"
                                            >
                                        </div>
                                        <div class="form-group">
                                            <input
                                                class="form-control form-control-user"
                                                name="kata-sandi"
                                                placeholder="Kata sandi"
                                                required
                                                type="password"
                                            >
                                        </div>
                                        <div class="form-group">
                                            <input
                                                class="form-control form-control-user"
                                                name="konfirmasi-kata-sandi"
                                                placeholder="Konfirmasi kata sandi"
                                                required
                                                type="password"
                                            >
                                        </div>
                                        <div class="form-group">
                                            <button
                                                class="btn btn-block btn-primary btn-user"
                                                type="submit"
                                            >Daftar</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a
                                            class="small"
                                            href="{{ route('autentikasi.masuk') }}"
                                        >Sudah punya akun? Masuk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
