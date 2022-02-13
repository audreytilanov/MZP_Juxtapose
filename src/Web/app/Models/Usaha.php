<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_usaha',
        'no_npwp',
        'tahun_berdiri',
        'jenis_usaha',
        'desc_usaha',
        'alamat_usaha'
    ];
}
