<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = 'history';
    protected $fillable = [
        'kd_barang',
        'quantity',
        'tanggal',
        'status',
        'user_id',
        'created_at',
        'updated_at',
    ];

    public function barang(){
        return $this->hasOne(Barang::class,'kd_barang', 'kd_barang');
    }

    public function user(){
        return $this->hasOne(User::class,'user_id', 'user_id');
    }
}
