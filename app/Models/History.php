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
}
