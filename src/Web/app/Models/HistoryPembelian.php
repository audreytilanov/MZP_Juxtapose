<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPembelian extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'usaha_id',
        'total_saham',
        'bukti',
    ];
}
