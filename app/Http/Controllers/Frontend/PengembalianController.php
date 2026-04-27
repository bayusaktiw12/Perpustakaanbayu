<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Carbon\Carbon;

class PengembalianController extends Controller
{
    public function index()
{
    $pengembalian = Pengembalian::with('peminjaman')->paginate(10);
    return view('page.frontend.pengembalian.index', compact('pengembalian'));
}
    public function create()
{
    $peminjaman = \App\Models\Peminjaman::all(); // ambil data peminjaman
    return view('page.frontend.pengembalian.create', compact('peminjaman'));
}
    public function edit($id)
{
    $pengembalian = \App\Models\Pengembalian::findOrFail($id);
    $peminjaman = \App\Models\Peminjaman::all();

    return view('page.frontend.pengembalian.edit', compact('pengembalian','peminjaman'));
}
    public function show($id)
{
    $pengembalian = \App\Models\Pengembalian::with('peminjaman.buku')->findOrFail($id);
    return view('page.frontend.pengembalian.show', compact('pengembalian'));
}
    public function update(Request $request, $id)
{
    $pengembalian = \App\Models\Pengembalian::findOrFail($id);

    $pengembalian->update([
        'peminjaman_id' => $request->peminjaman_id,
        'tgl_kembali' => $request->tgl_kembali,
    ]);

    return redirect()->route('pengembalian.index')->with('success', 'Data berhasil diupdate');
}
    public function store(Request $request)
    {

        $request->validate([
            'peminjaman_id' => 'required'
        ]);

        $peminjaman = Peminjaman::findOrFail($request->peminjaman_id);

        // cek sudah pernah ajukan
        $cek = Pengembalian::where('peminjaman_id',$peminjaman->id)->first();

        if($cek){
            return redirect()->back()->with('error','Pengembalian sudah diajukan');
        }

        // simpan pengembalian
        Pengembalian::create([
            'peminjaman_id' => $peminjaman->id,
            'tgl_dikembalikan' => Carbon::now(),
            'status' => 'menunggu_verifikasi'
        ]);

        // update status peminjaman
        $peminjaman->status = 'menunggu_verifikasi';
        $peminjaman->save();

        return redirect()->back()->with('success','Pengajuan pengembalian berhasil dikirim');

    }
}
