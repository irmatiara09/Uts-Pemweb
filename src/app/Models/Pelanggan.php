<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilPelanggan extends Model
{
    use HasFactory;

    protected $table = 'ProfilPelanggans';

    protected $fillable = [
        'id_pelanggan',
        'nama',
        'tanggal',
        'tarif_air',
        'jumlah_pembayaran',
        'alamat',
        'notelp',

    ];
}