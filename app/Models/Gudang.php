<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;
    protected $table = 'gudang';
    protected $fillable = [
        'gudang',
        'deskripsi',
        'created_at',
        'updated_at'
    ];
}
