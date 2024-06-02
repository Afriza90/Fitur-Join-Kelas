<nav class="bg-white mb-4 navbar navbar-expand navbar-light shadow static-top topbar">
    {{-- toggle sidebar --}}
    <button class="btn btn-link d-md-none mr-3 rounded-circle" id="sidebarToggleTop">
        <i class="fa-bars fa"></i>
    </button>
    {{-- toggle sidebar --}}
    @isset ($kelas->nama_kelas)
        <h4 class="font-weight-bold mb-0 ml-auto text-danger">{{ $kelas->nama_kelas }}</h4>
    @endisset
    {{-- navbar topbar --}}
    <ul class="ml-auto navbar-nav">
        <li>
            <div class="d-none d-sm-block h-100 topbar-divider"></div>
        </li>
        {{-- item nav --}}
        <li class="dropdown nav-item no-arrow">
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" id="userDropdown">
                <span class="d-lg-inline d-none mr-2 small text-gray-600">{{ $nama_depan_pengguna }}</span>
                <figure
                    class="img-profile rounded-circle avatar font-weight-bold"
                    data-initial="{{ $inisial_pengguna }}"
                ></figure>
            </a>
            {{-- dropdown --}}
            <div class="animated--grow-in dropdown-menu dropdown-menu-right shadow">
                <a
                    class="dropdown-item"
                    href="{{ route('profil') }}"
                ><i class="fa-fw fa-sm fa-user fas mr-2 text-gray-400"></i> Profil</a>
                <div class="dropdown-divider"></div>
                <a
                    class="dropdown-item"
                    href="#"
                ><i class="fa-fw fa-sign-out-alt fa-sm fas mr-2 text-gray-400"></i> Keluar</a>
            </div>
            {{-- dropdown --}}
        </li>
        {{-- item nav --}}
    </ul>
    {{-- navbar topbar --}}
</nav>
