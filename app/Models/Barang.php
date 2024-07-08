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

    public function satuan(){
        return $this->hasOne(Satuan::class, 'id', 'kd_satuan');
    }

    public function klasifikasi(){
        return $this->hasOne(Klasifikasi::class, 'id', 'kd_klasifikasi');
    }

    public function rak(){
        return $this->hasOne(Rak::class, 'id', 'kd_rak');
    }

    public function gudang(){
        return $this->hasOne(Gudang::class, 'id', 'kd_gudang');
    }
}
