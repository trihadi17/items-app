<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;
    protected $table = 'barang_keluar';
    protected $fillable = [
        'kd_transaksi',
        'tanggal',
        'kd_barang',
        'quantity',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
