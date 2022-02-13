<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FindPartner extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'visi',
        'misi',
        'budayakerja',
        'milestone',
        'kebutuhanmitra',
        'tujuanbermitra',
        'kompetensimitra',
        'catatan'
    ];
}
