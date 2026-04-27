<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
     public function index()
{
    $buku = Buku::all();
    return view('page.frontend.buku.index', compact('buku'));
}
public function create()
{
    return view('page.frontend.buku.create');
}

public function store(Request $request)
{
    $request->validate([
        'judul' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun' => 'required',
        'stok' => 'required|numeric',
        'kategori' => 'required',
        'cover' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('cover')) {
        $cover = $request->file('cover')->store('covers', 'public');
    } else {
        $cover = null;
    }

       Buku::create([
      'judul' => $request->judul,
      'penulis' => $request->penulis,
      'penerbit' => $request->penerbit,
      'tahun' => $request->tahun,
      'stok' => $request->stok,
      'kategori' => $request->kategori,
      'cover' => $cover,
   ]);
   return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
}
public function show($id)
{
    $buku = Buku::findOrFail($id);
    return view('page.frontend.buku.show', compact('buku'));
}

public function edit($id)
{
    $buku = Buku::findOrFail($id);
    return view('page.frontend.buku.edit', compact('buku'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'kategori' => 'required',
        'tahun' => 'required|numeric',
        'stok' => 'required|numeric',
        'cover' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $buku = Buku::findOrFail($id);
    $buku->update($request->all());

    return redirect('/buku')->with('success', 'Buku berhasil diupdate!');
}

public function destroy($id)
{
    $buku = Buku::findOrFail($id);
    $buku->delete();

    return redirect('/buku')->with('success', 'Buku berhasil dihapus!');
}
}
