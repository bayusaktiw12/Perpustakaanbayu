@extends('layout.frontend.app')
@section('content')
<div class="container-fluid mt-4">

  <div class="card shadow-sm border-0">

    <!-- HEADER -->
    <div class="card-header d-flex justify-content-between align-items-center">
      <h4 class="text-white m-0">Data Denda</h4>
    </div>

    <!-- BODY -->
    <div class="card-body">

      <!-- ALERT -->
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

      <!-- BUTTON -->
      <a href="{{ route('dashboard') }}" class="btn btn-light btn-sm mb-3">
        ← Kembali
      </a>

      <!-- TABLE -->
      <div class="table-responsive">
        <table class="table table-hover align-middle text-center">

          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Buku</th>
              <th>Denda</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            @forelse ($denda as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>

              <td>
                {{ optional($item->pengembalian->peminjaman->user)->name ?? '-' }}
              </td>

              <td>
                {{ optional($item->pengembalian->peminjaman->buku)->judul ?? '-' }}
              </td>

              <td>
                Rp {{ number_format($item->jumlah_denda ?? 0, 0, ',', '.') }}
              </td>

              <td>
                @if($item->status_bayar == 'lunas')
                  <span class="badge bg-success">Lunas</span>
                @else
                  <span class="badge bg-danger">Belum Bayar</span>
                @endif
              </td>

              <td>
                @if($item->status_bayar == 'belum')
                <form action="{{ route('denda.bayar', $item->id) }}" method="POST">
                  @csrf
                  <button class="btn btn-primary btn-sm">
                    Bayar
                  </button>
                </form>
                @else
                  <span class="text-success">✔</span>
                @endif
              </td>
            </tr>

            @empty
            <tr>
              <td colspan="6" class="text-center text-secondary">
                Tidak ada data denda
              </td>
            </tr>
            @endforelse
          </tbody>

        </table>
      </div>

      <!-- PAGINATION -->
      <div class="mt-3">
        {{ $denda->links() }}
      </div>

    </div>
  </div>

</div>
@endsection