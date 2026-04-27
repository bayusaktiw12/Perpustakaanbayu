<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Buku;

class PeminjamanController extends Controller
{
    public function index()
{       $peminjamans = Peminjaman::all();
        return view('page.frontend.peminjaman.index', compact('peminjamans'));
}
     public function create()
{
        return view('page.frontend.peminjaman.create');
}
     public function show($id)
{
    $peminjaman = Peminjaman::findOrFail($id);
    return view('page.frontend.peminjaman.show', compact('peminjaman'));
}
    public function edit($id)
{
    $peminjaman = Peminjaman::findOrFail($id);
    $buku = Buku::all();
    return view('page.frontend.peminjaman.edit', compact('peminjaman', 'buku'));
}
    public function update(Request $request, $id)
{
    $request->validate([
        'nama_peminjam' => 'required',
        'judul_buku' => 'required',
        'tanggal_pinjam' => 'required|date',
        'tanggal_kembali' => 'nullable|date',
    ]);

    $peminjaman = Peminjaman::findOrFail($id);

    $peminjaman->update([
        'nama_peminjam' => $request->nama_peminjam,
        'judul_buku' => $request->judul_buku,
        'tanggal_pinjam' => $request->tanggal_pinjam,
        'tanggal_kembali' => $request->tanggal_kembali,
    ]);

    return redirect()->route('peminjaman.index')
        ->with('success', 'Data berhasil diupdate');
}
    public function destroy($id)
{
    $peminjaman = Peminjaman::findOrFail($id);
    $peminjaman->delete();

    return redirect()->route('peminjaman.index')
        ->with('success', 'Data berhasil dihapus');
}
public function store(Request $request)
{
    $request->validate([
        'nama_peminjam' => 'required',
        'judul_buku' => 'required',
        'tanggal_pinjam' => 'required|date',
        'tanggal_kembali' => 'nullable|date',
    ]);

    Peminjaman::create([
        'nama_peminjam' => $request->nama_peminjam,
        'judul_buku' => $request->judul_buku,
        'tanggal_pinjam' => $request->tanggal_pinjam,
        'tanggal_kembali' => $request->tanggal_kembali,
    ]);

    return redirect()->route('peminjaman.index')
        ->with('success', 'Data berhasil ditambahkan');
}
}
