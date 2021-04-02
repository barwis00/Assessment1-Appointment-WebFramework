<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    // use HasFactory;
    protected $table = "Jadwal";

    protected $fillable = [
        'judul',
        'deskripsi',
        'awal',
        'akhir'
    ];

    protected $casts = [
        'awal' => 'dateTime',
        'akhir' => 'dateTime'
    ];
}
