<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasifikasi extends Model
{
    use HasFactory;
    protected $table = 'klasifikasi';
    protected $fillable = [
        'klasifikasi',
        'deskripsi',
        'created_at',
        'updated_at'
    ];
}
