<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $table = 'barang_masuk';
    protected $fillable = [
        'kd_transaksi',
        'tanggal',
        'kd_barang',
        'quantity',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function barang(){
        return $this->hasOne(Barang::class, 'kd_barang', 'kd_barang');
    }

    public function user(){
        return $this->hasOne(User::class, 'user_id', 'user_id');
    }
}
