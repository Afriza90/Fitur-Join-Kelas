<ul class="accordion navbar-nav sidebar sidebar-dark" id="accordionSidebar" style="background-color: #7d0a0a">
    {{-- sidebar --}}
    <a
        class="align-items-center d-flex justify-content-center rounded-pill sidebar-brand"
        href="{{ route('dasbor') }}"
        style="background-color: #7d0a0a"
    >
        <div class="mx-3 sidebar-brand-text">{{ config('app.name') }}</div>
    </a>
    {{-- sidebar --}}
    {{-- pembatas --}}
    <hr class="my-0 sidebar-divider">
    {{-- pembatas --}}
    {{-- item nav --}}
    <li @class(['active' => url()->current() === route('dasbor'), 'nav-item'])>
        <a class="nav-link" href="{{ route('dasbor') }}">
            <i class="fa-fw fa-tachometer-alt fas"></i>
            <span>Dasbor</span>
        </a>
    </li>
    <li @class(['active' => url()->current() === route('kelas'), 'nav-item'])>
        <a class="nav-link" href="{{ route('kelas') }}">
            <i class="fa-fw fa-graduation-cap fas"></i>
            <span>Kelas Saya</span>
        </a>
    </li>
    {{-- item nav --}}
    {{-- pembatas --}}
    <hr class="sidebar-divider">
    {{-- pembatas --}}
    {{-- heading --}}
    <div class="sidebar-heading">Pengaturan</div>
    {{-- heading --}}
    {{-- item nav --}}
    <li @class(['active' => url()->current() === route('profil'), 'nav-item'])>
        <a class="nav-link" href="{{ route('profil') }}">
            <i class="fa-fw fa-user fas"></i>
            <span>Profil</span>
        </a>
    </li>
    <li @class(['active' => url()->current() === route('tentang'), 'nav-item'])>
        <a class="nav-link" href="{{ route('tentang') }}">
            <i class="fa-fw fa-circle-exclamation fas"></i>
            <span>Tentang</span>
        </a>
    </li>
    {{-- item nav --}}
    {{-- pembatas --}}
    <hr class="d-md-block d-none sidebar-divider">
    {{-- pembatas --}}
    {{-- toggler sidebar --}}
    <div class="d-md-inline d-none text-center">
        <button class="border-0 rounded-circle" id="sidebarToggle"></button>
    </div>
    {{-- toggler sidebar --}}
</ul>
