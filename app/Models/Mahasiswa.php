<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // use HasFactory;
    protected $table = "Mahasiswa";

    protected $fillable = [
        'nama',
        'nim',
        'tanggal_lahir',
        'alamat',
        'tahun_masuk'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date'
    ];
}
