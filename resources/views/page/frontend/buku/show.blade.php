@extends('layout.frontend.app')
@section('content')
<div class="container mt-4">
    <div class="card p-4">
        <h3>Detail Buku</h3>

        <p><b>Judul:</b> {{ $buku->judul }}</p>
        <p><b>Penulis:</b> {{ $buku->penulis }}</p>
        <p><b>Penerbit:</b> {{ $buku->penerbit }}</p>
        <p><b>Kategori:</b> {{ $buku->kategori }}</p>
        <p><b>Tahun:</b> {{ $buku->tahun }}</p>
        <p><b>Stok:</b> {{ $buku->stok }}</p>

        <a href="/buku" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection