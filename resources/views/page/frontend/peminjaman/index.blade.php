@extends('layout.frontend.app')
@section('content')
<div class="container mt-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Peminjaman</h3>
        <a href="{{ route('peminjaman.create') }}" class="btn btn-primary">
            + Tambah Peminjaman
        </a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        @forelse ($peminjamans as $peminjaman)
            <tr>
                <td>{{ $peminjaman->nama_peminjam }}</td>
                <td>{{ $peminjaman->judul_buku }}</td>
                <td>{{ $peminjaman->tanggal_pinjam }}</td>
                <td>{{ $peminjaman->tanggal_kembali }}</td>

                <td>
                    @if($peminjaman->tanggal_kembali)
                        <span class="badge bg-success">Selesai</span>
                    @else
                        <span class="badge bg-warning text-dark">Dipinjam</span>
                    @endif
                </td>

                <td>
                    <a href="{{ route('peminjaman.show', $peminjaman->id) }}" 
                       class="btn btn-info btn-sm">Detail</a>

                    <a href="{{ route('peminjaman.edit', $peminjaman->id) }}" 
                       class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('peminjaman.destroy', $peminjaman->id) }}" 
                          method="POST" 
                          style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" 
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus data ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td colspan="6" class="text-center">
                    Belum ada data peminjaman
                </td>
            </tr>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">← Kembali</a>
        @endforelse
        </tbody>
    </table>
</div>
@endsection