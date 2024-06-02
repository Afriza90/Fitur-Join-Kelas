@extends('struktur.dasar')
@section('konten')
    <div class="row">
        <div class="col-lg-4 d-flex flex-row justify-content-center mb-lg-0 mb-3">
            <a class="mr-3 text-decoration-none" href="#">
                <div class="bg-transparent border-danger card" style="width: 110px">
                    <div class="card-body">
                        <div class="text-center">
                            <i class="fa fa-book text-danger"></i>
                            <h5 class="font-weight-bold mb-0 mt-2 text-danger">Materi</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a class="text-decoration-none" href="#">
                <div class="bg-transparent border-danger card" style="width: 110px">
                    <div class="card-body">
                        <div class="text-center">
                            <i class="fa fa-users text-danger"></i>
                            <h5 class="font-weight-bold mb-0 mt-2 text-danger">Absensi</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <h4 class="font-weight-bold mb-3">Daftar Materi</h4>
            <form @class(['mb-3' => $materi])>
                <div class="input-group">
                    <span class="input-group-prepend">
                        <button class="bg-white border border-right-0 btn btn-outline-secondary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    <input
                        class="border border-right-0 form-control py-2"
                        name="cari"
                        placeholder="Cari"
                        type="search"
                        value="{{ request()->query('cari') }}"
                    >
                </div>
            </form>
            @if ($materi)
                <div class="row">
                    @foreach ($materi as $m)
                        <div @class(['col-12', 'mb-3' => !$loop->last])>
                            <div class="bg-transparent border-dark card">
                                <div class="align-items-center card-body d-flex">
                                    <i class="fa fa-2x fa-book mr-3"></i>
                                    <div class="d-inline-block flex-grow-1">
                                        <h5 class="font-weight-bold mb-0">Materi {{ $m->nama_materi }}</h5>
                                        <small class="text-muted">Dibuat: {{ date('d M Y') }}</small>
                                    </div>
                                    <i class="fa fa-2x fa-ellipsis-v"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="col-lg-4"></div>
    </div>
@endsection
