<div class="sidebar">
    <div class="sidebar-header">
        <h4>Anggota</h4>
        <small>Anggota</small>
    </div>

    <ul class="nav">

        <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard">
                <i class="mdi mdi-view-dashboard icon-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>

        @if(auth()->user()->role == 'petugas')
        <li class="nav-item">
            <a href="{{ route('dashboard.petugas') }}">
                <i class="mdi mdi-account-key icon-petugas"></i>
                <span>Dashboard Petugas</span>
            </a>
        </li>
        @endif
        
        <li class="nav-item {{ request()->is('buku*') ? 'active' : '' }}">
            <a href="/buku">
                <i class="mdi mdi-book-open-page-variant icon-buku"></i>
                <span>Buku</span>
            </a>
        </li>

        <li class="nav-item {{ request()->is('peminjaman*') ? 'active' : '' }}">
            <a href="/peminjaman">
                <i class="mdi mdi-book-plus icon-pinjam"></i>
                <span>Peminjaman</span>
            </a>
        </li>

        <li class="nav-item {{ request()->is('pengembalian*') ? 'active' : '' }}">
            <a href="/pengembalian">
                <i class="mdi mdi-clipboard-check icon-kembali"></i>
                <span>Pengembalian</span>
            </a>
        </li>

        <li class="nav-item {{ request()->is('denda*') ? 'active' : '' }}">
            <a href="/denda">
                <i class="mdi mdi-cash-multiple icon-denda"></i>
                <span>Denda</span>
            </a>
        </li>

        <li class="nav-item">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" style="background:none;border:none;color:inherit;cursor:pointer;display:flex;align-items:center;gap:8px;">
            
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                <polyline points="16 17 21 12 16 7"/>
                <line x1="21" y1="12" x2="9" y2="12"/>
            </svg>
            Logout
        </button>
    </form>
</li>
       </ul>
       </div>