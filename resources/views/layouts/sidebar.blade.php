<aside id="sidebar" class="sidebar bg-light">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item ">
            <a class="nav-link " href="dashboard">
                <i class="bi bi-house-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        {{-- <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link " href="{{ route('status') }}">
                    <i class="bi bi-table"></i>
                    <span>Status Pengajuan Surat Observasi</span>
                </a>
            </li>
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('statusperlengkapan') }}">
                        <i class="bi bi-table"></i>
                        <span>Status Pengajuan Surat Peminjaman Perlengkapan</span>
                    </a>
                </li>
                <ul class="sidebar-nav" id="sidebar-nav">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('statusruangan') }}">
                            <i class="bi bi-table"></i>
                            <span>Status Peminjaman Ruangan Mahasiswa</span>
                        </a>
                    </li>
                    <ul class="sidebar-nav" id="sidebar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('statusskmk') }}">
                                <i class="bi bi-table"></i>
                                <span>Status Pengajuan Surat SKMK</span>
                            </a>
                        </li>
                        <ul class="sidebar-nav" id="sidebar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('statuslaporanmhs') }}">
                                    <i class="bi bi-table"></i>
                                    <span>Status Laporan Proposal Mahasiswa</span>
                                </a>
                            </li>
                            <ul class="sidebar-nav" id="sidebar-nav">
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('statuslaporanlpj') }}">
                                        <i class="bi bi-table"></i>
                                        <span>Status Laporan LPJ Mahasiswa</span>
                                    </a>
                                </li>
                                <ul class="sidebar-nav" id="sidebar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ route('statusprestasi') }}">
                                            <i class="bi bi-table"></i>
                                            <span>Status Laporan Prestasi Mahasiswa</span>
                                        </a>
                                    </li>
                                </ul>
                            </ul>
                        </ul>
                    </ul>
                </ul>
            </ul>
        </ul> --}}
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="status-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-table"></i>
                <span>Cek Status</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="status-dropdown">
                <li><a class="dropdown-item" href="{{ route('status') }}">Status Pengajuan Surat Observasi</a></li>
                <li><a class="dropdown-item" href="{{ route('statusperlengkapan') }}">Pengajuan Surat Peminjaman Perlengkapan</a></li>
                <li><a class="dropdown-item" href="{{ route('statusruangan') }}">Peminjaman Ruangan Mahasiswa</a></li>
                <li><a class="dropdown-item" href="{{ route('statusskmk') }}">Pengajuan Surat SKMK</a></li>
                <li><a class="dropdown-item" href="{{ route('statuslaporanmhs') }}">Laporan Proposal Mahasiswa</a></li>
                <li><a class="dropdown-item" href="{{ route('statuslaporanlpj') }}">Laporan LPJ Mahasiswa</a></li>
                <li><a class="dropdown-item" href="{{ route('statusprestasi') }}">Laporan Prestasi Mahasiswa</a></li>
              </ul>
            </li>
          </ul>

    </ul>
</aside>
