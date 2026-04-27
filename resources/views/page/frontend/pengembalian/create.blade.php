@extends('layout.frontend.app')
@section('content')
<div class="container">
    <h3>Tambah Pengembalian</h3>

    <form action="{{ route('pengembalian.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Peminjaman</label>
            <select name="peminjaman_id" class="form-control">
                @foreach($peminjaman as $p)
                    <option value="{{ $p->id }}">
                        {{ $p->nama }} - {{ $p->buku->judul }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal Kembali</label>
            <input type="date" name="tgl_kembali" class="form-control">
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection