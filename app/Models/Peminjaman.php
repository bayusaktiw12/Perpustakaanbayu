<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $fillable = [
    'nama_peminjam',
    'judul_buku',
    'tanggal_pinjam',
    'tanggal_kembali',
];
}