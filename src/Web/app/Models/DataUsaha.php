<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUsaha extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'file_prospektus',
        'foto',
        'harga_saham',
        'total_saham',
        'dividen',
        'penawaran',
        'desc_pemilik',
        'foto2'
    ];
}
