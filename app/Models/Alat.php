<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    /** @use HasFactory<\Database\Factories\AlatFactory> */
    use HasFactory;
    protected $fillable = [
    'kode_barang',
    'nama_barang',
    'kategori',
    'stok',
    'harga_sewa',
    'kondisi',
];
}
