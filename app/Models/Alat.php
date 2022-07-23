<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = "alat";
    protected $primaryKey = "id";
    protected $fillable = [
        'nm_alat', 'harga', 'stok', 'jumlah', 'gambar',
    ];

    public function penyewaan()
    {
        return $this->hasMany(Penyewaan::class);
    }
}
