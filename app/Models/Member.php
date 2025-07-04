<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // Izinkan mass assignment untuk kolom berikut:
    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'tanggal_daftar',
        'paket'
    ];
}
