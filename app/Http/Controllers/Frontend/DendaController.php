<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengembalian;
use App\Models\Denda;

class DendaController extends Controller
{
    public function index()
    {
        $denda = Denda::with('pengembalian.peminjaman.user', 'pengembalian.peminjaman.buku')
                      ->paginate(10);

        return view('page.frontend.denda.index', compact('denda'));
    }

    public function bayar($id)
    {
        $denda = Denda::findOrFail($id);

        $denda->update([
            'status_bayar' => 'lunas'
        ]);

        return redirect()->route('denda.index')->with('success', 'Denda berhasil dibayar');
    }
}