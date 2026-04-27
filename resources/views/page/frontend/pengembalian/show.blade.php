@extends('layout.frontend.app')
@section('content')
<div class="container">
    <h3>Detail Pengembalian</h3>

    <div class="card p-4">
        <p><strong>Nama:</strong> {{ $pengembalian->peminjaman->nama }}</p>
        <p><strong>Buku:</strong> {{ $pengembalian->peminjaman->buku->judul }}</p>
        <p><strong>Tanggal Pinjam:</strong> {{ $pengembalian->peminjaman->tgl_pinjam }}</p>
        <p><strong>Tanggal Kembali:</strong> {{ $pengembalian->tgl_kembali }}</p>
        <p><strong>Denda:</strong> Rp {{ $pengembalian->denda }}</p>

        <a href="{{ route('pengembalian.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</div>
@endsection