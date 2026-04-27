@extends('layout.frontend.app')
@section('content')
<div class="container mt-4">
    <div class="card p-4">
        <h3>Tambah Buku</h3>

        {{-- SUCCESS --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- ERROR --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ old('judul') }}">
            </div>

            <div class="mb-3">
                <label>Penulis</label>
                <input type="text" name="penulis" class="form-control" value="{{ old('penulis') }}">
            </div>

            <div class="mb-3">
                <label>Penerbit</label>
                <input type="text" name="penerbit" class="form-control" value="{{ old('penerbit') }}">
            </div>

            {{-- ✅ KATEGORI (DROPDOWN) --}}
            <div class="mb-3">
                <label>Kategori</label>
                <select name="kategori" class="form-control">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Novel">Novel</option>
                    <option value="Pelajaran">Pelajaran</option>
                    <option value="Cerpen">Cerpen</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Tahun</label>
                <input type="number" name="tahun" class="form-control" value="{{ old('tahun') }}">
            </div>

            <div class="mb-3">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" value="{{ old('stok') }}">
            </div>
           
            <div class="mb-3">
             <label>Cover Buku</label>
             <input type="file" name="cover" class="form-control">
             </div>
            <button class="btn btn-primary">Simpan</button>
            <a href="/buku" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection