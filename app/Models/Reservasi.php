<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'nomor',
        'alamat',
        'layanan',
        'tanggal',
        'jumlah',
    ];
}