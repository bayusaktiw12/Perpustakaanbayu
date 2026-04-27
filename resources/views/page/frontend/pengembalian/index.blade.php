@extends('layout.frontend.app')
@section('content')

<div class="container-fluid mt-4">

  <div class="card shadow-sm border-0">

    <div class="card-header d-flex justify-content-between align-items-center">
      <h4 class="text-white m-0">Data Pengembalian</h4>

      <a href="{{ route('pengembalian.create') }}" class="btn btn-success btn-sm">
        + Tambah Pengembalian
      </a>
    </div>

    <div class="card-body">

      <a href="{{ route('dashboard') }}" class="btn btn-light btn-sm mb-3">
        ← Kembali
      </a>

      <div class="table-responsive">
        <table class="table table-hover align-middle text-center">

          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Buku</th>
              <th>Tanggal Pinjam</th>
              <th>Jatuh Tempo</th>
              <th>Tanggal Kembali</th>
              <th>Denda</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            @forelse ($pengembalian as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>

              <td>{{ optional($item->peminjaman->user)->name ?? '-' }}</td>

              <td>{{ optional($item->peminjaman->buku)->judul ?? '-' }}</td>

              <td>{{ $item->peminjaman->tanggal_pinjam ?? '-' }}</td>

              <td>{{ $item->peminjaman->tanggal_kembali ?? '-' }}</td>

              <td>{{ $item->tanggal_dikembalikan ?? '-' }}</td>

              <td>
                Rp {{ number_format($item->denda ?? 0, 0, ',', '.') }}
              </td>

              <td>
                @if($item->status == 'selesai')
                  <span class="badge bg-success">Selesai</span>
                @else
                  <span class="badge bg-warning text-dark">Proses</span>
                @endif
              </td>

              <td>
                <a href="{{ route('pengembalian.edit', $item->id) }}" class="btn btn-warning btn-sm">
                  Edit
                </a>

                <form action="{{ route('pengembalian.destroy', $item->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">
                    Hapus
                  </button>
                </form>
              </td>
            </tr>

            @empty
            <tr>
              <td colspan="9" class="text-center text-secondary">
                Tidak ada data pengembalian
              </td>
            </tr>
            @endforelse
          </tbody>

        </table>
      </div>

      <div class="mt-3">
        {{ $pengembalian->links() }}
      </div>

    </div>
  </div>

</div>
@endsection