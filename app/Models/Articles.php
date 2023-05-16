<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;


    protected $fillable = [
        'judul_artikel',
        'isi_artikel',
        'user_id',
        'tanggal'
    ];



    protected $casts = [
        'created_at' => 'datetime'
    ];
}
