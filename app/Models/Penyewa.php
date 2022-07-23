<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = 'penyewa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'idpenyewa', 'nama', 'alamat', 'nohp', 'jaminan',
    ];
}
