<body id="page-top">
{{-- pembungkus halaman --}}
<div id="wrapper">
    {{-- sidebar --}}
    @include('struktur.komponen.sidebar')
    {{-- sidebar --}}
    {{-- pembungkus konten --}}
    <div class="d-flex flex-column" id="content-wrapper">
        {{-- konten utama --}}
        <div id="content">
            {{-- topbar --}}
            @include('struktur.komponen.topbar')
            {{-- topbar --}}
            {{-- konten halaman --}}
            <div class="container-fluid">
                @yield('konten')
            </div>
            {{-- konten halaman --}}
        </div>
        {{-- konten utama --}}
        {{-- footer --}}
        @include('struktur.komponen.footer')
        {{-- footer --}}
    </div>
    {{-- pembungkus konten --}}
</div>
{{-- pembungkus halaman --}}
{{-- kembali ke atas --}}
@include('struktur.komponen.kembali-ke-atas')
{{-- kembali ke atas --}}
{{-- js --}}
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
{{-- js --}}
</body>
