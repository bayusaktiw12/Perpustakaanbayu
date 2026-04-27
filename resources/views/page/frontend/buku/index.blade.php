@extends('layout.frontend.app')

@section('content')
<div class="container mt-4">
    <div class="card p-4 shadow">

        {{-- HEADER --}}
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Data Buku</h3>
            <a href="{{ route('buku.create') }}" class="btn btn-primary">
                + Tambah Buku
            </a>
        </div>

        {{-- ALERT SUCCESS --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- TABLE --}}
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th style="width: 50px;">No</th>
                        <th style="width: 120px;">Cover</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Kategori</th>
                        <th style="width: 80px;">Tahun</th>
                        <th style="width: 70px;">Stok</th>
                        <th style="width: 200px;">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($buku as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        {{-- COVER --}}
                        <td>
                            @if($item->cover)
                                <img src="{{ asset('storage/' . $item->cover) }}"
                                     alt="cover"
                                     style="width:90px; height:120px; object-fit:cover; border-radius:6px;">
                            @else
                                <span class="text-muted">Tidak ada</span>
                            @endif
                        </td>

                        <td class="text-start">{{ $item->judul }}</td>
                        <td>{{ $item->penulis }}</td>
                        <td>{{ $item->penerbit }}</td>

                        {{-- KATEGORI --}}
                        <td>
                            @if($item->kategori == 'Novel')
                                <span class="badge bg-primary">Novel</span>
                            @elseif($item->kategori == 'Pelajaran')
                                <span class="badge bg-success">Pelajaran</span>
                            @elseif($item->kategori == 'Cerpen')
                                <span class="badge bg-warning text-dark">Cerpen</span>
                            @else
                                <span class="badge bg-secondary">
                                    {{ $item->kategori ?? '-' }}
                                </span>
                            @endif
                        </td>

                        <td>{{ $item->tahun }}</td>
                        <td>{{ $item->stok }}</td>

                        {{-- AKSI --}}
                        <td>
                            <a href="{{ route('buku.show', $item->id) }}"
                               class="btn btn-sm btn-info">
                                Detail
                            </a>

                            <a href="{{ route('buku.edit', $item->id) }}"
                               class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('buku.destroy', $item->id) }}"
                                  method="POST"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin hapus?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>

                    @empty
                    <tr>
                        <td colspan="9" class="text-center">
                            Data buku belum ada
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- BACK BUTTON --}}
        <div class="mt-3">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                ← Kembali
            </a>
        </div>

    </div>
</div>
@endsection