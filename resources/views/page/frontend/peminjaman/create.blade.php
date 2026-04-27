@extends('layout.frontend.app')
@section('content')
<div class="container mt-4">

    <div class="card p-4">
        <h3>Tambah Peminjaman</h3>

        {{-- NOTIF SUCCESS --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- ERROR VALIDATION --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- FORM --}}
        <form action="{{ route('peminjaman.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama Peminjam</label>
                <input type="text" 
                       name="nama_peminjam" 
                       class="form-control"
                       value="{{ old('nama_peminjam') }}" 
                       required>
            </div>

            <div class="mb-3">
                <label>Judul Buku</label>
                <input type="text" 
                       name="judul_buku" 
                       class="form-control"
                       value="{{ old('judul_buku') }}" 
                       required>
            </div>

            <div class="mb-3">
                <label>Tanggal Pinjam</label>
                <input type="date" 
                       name="tanggal_pinjam" 
                       class="form-control"
                       value="{{ old('tanggal_pinjam') }}" 
                       required>
            </div>

            <div class="mb-3">
                <label>Tanggal Kembali</label>
                <input type="date" 
                       name="tanggal_kembali" 
                       class="form-control"
                       value="{{ old('tanggal_kembali') }}">
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
                </a>
            </div>

        </form>
    </div>
</div>
@endsection