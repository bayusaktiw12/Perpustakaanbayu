<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Denda extends Model
{
    protected $fillable = [
        'pengembalian_id',
        'jumlah_denda',
        'status_bayar'
    ];

    // Relasi ke Pengembalian
    public function pengembalian()
    {
        return $this->belongsTo(Pengembalian::class);
    }
}
