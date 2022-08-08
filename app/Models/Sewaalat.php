<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewaalat extends Model
{
    protected $table = "sewa_alat";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_alat', 'jumlah_alat'
    ];
}