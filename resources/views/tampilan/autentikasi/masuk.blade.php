@extends('struktur.dasar')
@push('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush
@section('konten')
    <div class="container">
        <div class="justify-content-center row">
            <div class="col-lg-12 col-md-9 col-xl-10">
                <div class="border-0 card my-5 o-hidden shadow-lg">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-lg-block d-none">
                                <img alt="Logo" src="{{ asset('img/unsiclass.jpg') }}">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 mb-4 text-gray-900">Masuk</h1>
                                    </div>
                                    <form class="user" method="post">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <input
                                                autofocus
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
                                            <div class="custom-checkbox custom-control small">
                                                <input
                                                    @checked(old('ingat-saya'))
                                                    class="custom-control-input"
                                                    id="masukan-ingat-saya"
                                                    name="ingat-saya"
                                                    type="checkbox"
                                                >
                                                <label
                                                    class="custom-control-label"
                                                    for="masukan-ingat-saya"
                                                >Ingat Saya</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button
                                                class="btn btn-block btn-primary btn-user"
                                                type="submit"
                                            >Masuk</button>
                                        </div>
                                        <hr>
                                        <div class="text-center">
                                            <a
                                                class="small"
                                                href="{{ route('autentikasi.daftar') }}"
                                            >Belum punya akun? Daftar</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
