<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = [
        'kd_barang',
        'barang',
        'deskripsi',
        'kd_satuan',
        'kd_klasifikasi',
        'kd_rak',
        'kd_gudang',
        'stok',
        'user_id',
        'created_at',
        'updated_at',
    ];
}
