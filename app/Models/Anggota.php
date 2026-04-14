<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Anggota extends Model
{
    use Notifiable;

    protected $table = 'anggotas';
    protected $fillable = [
        'nama',
        'nis',
        'email',
        'kelas',
        'password',
        'status'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
