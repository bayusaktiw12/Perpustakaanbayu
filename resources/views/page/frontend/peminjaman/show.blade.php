@extends('layout.frontend.app')
@section('content')
<div class="container mt-4">
    <div class="card p-4">
        <h3>Detail Peminjaman</h3>

        <p><b>Nama:</b> {{ $peminjaman->nama_peminjam }}</p>
        <p><b>Judul Buku:</b> {{ $peminjaman->judul_buku }}</p>
        <p><b>Tanggal Pinjam:</b> {{ $peminjaman->tanggal_pinjam }}</p>
        <p><b>Tanggal Kembali:</b> {{ $peminjaman->tanggal_kembali }}</p>

        <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection