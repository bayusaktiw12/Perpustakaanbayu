@extends('layout.frontend.app')
@section('content')
<div class="container">
    <h3>Edit Pengembalian</h3>

    <form action="{{ route('pengembalian.update', $pengembalian->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Peminjaman</label>
            <select name="peminjaman_id" class="form-control">
                @foreach($peminjaman as $p)
                    <option value="{{ $p->id }}"
                        {{ $p->id == $pengembalian->peminjaman_id ? 'selected' : '' }}>
                        {{ $p->nama }} - {{ $p->buku->judul }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal Kembali</label>
            <input type="date" name="tgl_kembali"
                   value="{{ $pengembalian->tgl_kembali }}"
                   class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('pengembalian.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection