@extends('struktur.dasar')
@section('konten')
    {{-- heading halaman --}}
    <h1 class="h3 mb-4 text-gray-800">Tentang</h1>
    {{-- heading halaman --}}
    <div class="justify-content-center row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-profile-image mt-4">
                    <img alt="Banner" src="{{ asset('img/unsiclass.jpg') }}">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">Unsiclass</h5>
                            <p>
                                LMS Unsiclass Project dibuat untuk memenuhi tugas akhir mata kuliah rekayasa perangkat lunak<br>
                                Jika proyek ini dianggap berguna, maka pertimbangkan untuk memberikan ⭐
                            </p>
                            <a
                                class="btn btn-github"
                                href="https://github.com/Project-RPL-LMS-Unsiclass"
                                target="_blank"
                            ><i class="fa-fw fa-github fab"></i> Pergi ke repositori</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">Kredit</h5>
                            <p>Terima kasih besar kepada semua orang yang membantu membuat proyek ini dan juga kepada dosen kami yang telah membimbing kami, Dr. Oman Komarudin, S.kom.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
