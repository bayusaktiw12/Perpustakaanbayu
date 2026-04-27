@extends('layout.frontend.app')
@section('content')
<div class="container mt-4">
    <div class="card p-4">
        <h3>Edit Buku</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('buku.update', $buku->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}">
            </div>

            <div class="mb-3">
                <label>Penulis</label>
                <input type="text" name="penulis" class="form-control" value="{{ $buku->penulis }}">
            </div>

            <div class="mb-3">
                <label>Penerbit</label>
                <input type="text" name="penerbit" class="form-control" value="{{ $buku->penerbit }}">
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <select name="kategori" class="form-control">
                    <option {{ $buku->kategori == 'Novel' ? 'selected' : '' }}>Novel</option>
                    <option {{ $buku->kategori == 'Pelajaran' ? 'selected' : '' }}>Pelajaran</option>
                    <option {{ $buku->kategori == 'Cerpen' ? 'selected' : '' }}>Cerpen</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Tahun</label>
                <input type="number" name="tahun" class="form-control" value="{{ $buku->tahun }}">
            </div>

            <div class="mb-3">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" value="{{ $buku->stok }}">
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="/buku" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection