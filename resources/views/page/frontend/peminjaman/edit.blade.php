@extends('layout.frontend.app')
@section('content')
<div class="container">
    <h3>Edit Peminjaman</h3>

    <form action="{{ route('peminjaman.update',$peminjaman->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Peminjam</label>
            <input type="text" name="nama" value="{{ $peminjaman->nama }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Buku</label>
            <select name="buku_id" class="form-control">
                @foreach($buku as $b)
                <option value="{{ $b->id }}"
                    {{ $peminjaman->buku_id == $b->id ? 'selected' : '' }}>
                    {{ $b->judul }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal Pinjam</label>
            <input type="date" name="tgl_pinjam" value="{{ $peminjaman->tgl_pinjam }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Tanggal Kembali</label>
            <input type="date" name="tgl_kembali" value="{{ $peminjaman->tgl_kembali }}" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection