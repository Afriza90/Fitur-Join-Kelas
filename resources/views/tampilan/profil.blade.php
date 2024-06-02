@extends('struktur.dasar')
@section('konten')
    {{-- heading halaman --}}
    <h1 class="h3 mb-4 text-gray-800">Profil</h1>
    {{-- heading halaman --}}
    <div class="row">
        <div class="col-lg-4 order-lg-2">
            <div class="card shadow mb-4">
                <div class="card-profile-image mt-4">
                    <figure
                        class="avatar avatar font-weight-bold rounded-circle"
                        style="font-size: 60px; height: 180px; width: 180px"
                        data-initial="A"
                    ></figure>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold">Afrizaaa</h5>
                                <p>Mahasiswa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 order-lg-1">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="font-weight-bold m-0 text-primary">Akun Saya</h6>
                </div>
                <div class="card-body">
                    <form method="post" autocomplete="off">
                        @csrf
                        @method('put')
                        <h6 class="heading-small mb-4 text-muted">Informasi pengguna</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="focused form-group">
                                        <label
                                            class="form-control-label"
                                            for="masukan-nama-depan"
                                        >Nama depan <span class="small text-danger">*</span></label>
                                        <input
                                            class="form-control"
                                            id="masukan-nama-depan"
                                            name="nama"
                                            value="{{ old('nama') }}"
                                            type="text"
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="focused form-group">
                                        <label class="form-control-label" for="masukan-nama-belakang">Nama belakang</label>
                                        <input
                                            class="form-control"
                                            id="masukan-nama-belakang"
                                            name="nama-belakang"
                                            type="text"
                                            value="{{ old('nama-belakang') }}"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label
                                            class="form-control-label"
                                            for="masukan-alamat-surel"
                                        >Alamat surel <span class="small text-danger">*</span></label>
                                        <input
                                            class="form-control"
                                            id="masukan-alamat-surel"
                                            name="alamat-surel"
                                            type="email"
                                            value="{{ old('alamat-surel') }}"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="focused form-group">
                                        <label
                                            class="form-control-label"
                                            for="masukan-kata-sandi-saat-ini"
                                        >Kata sandi saat ini</label>
                                        <input
                                            class="form-control"
                                            id="masukan-kata-sandi-saat-ini"
                                            name="kata-sandi-saat-ini"
                                            type="password"
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="focused form-group">
                                        <label
                                            class="form-control-label"
                                            for="kata-sandi-baru"
                                        >Kata sandi baru</label>
                                        <input
                                            class="form-control"
                                            id="kata-sandi-baru"
                                            name="kata-sandi-baru"
                                            type="password"
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="focused form-group">
                                        <label
                                            class="form-control-label"
                                            for="masukan-konfirmasi-kata-sandi"
                                        >Konfirmasi kata sandi</label>
                                        <input
                                            class="form-control"
                                            id="masukan-konfirmasi-kata-sandi"
                                            name="konfirmasi-kata-sandi"
                                            type="password"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- tombol --}}
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                                </div>
                            </div>
                        </div>
                        {{-- tombol --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
