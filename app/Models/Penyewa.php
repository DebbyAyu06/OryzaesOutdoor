<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = 'penyewa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nama', 'alamat', 'nohp', 'jaminan',
    ];

    public function penyewaan()
    {
        return $this->hasMany(Penyewaan::class);
    }
}
