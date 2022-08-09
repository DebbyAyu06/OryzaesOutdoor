<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewaalat extends Model
{
    protected $table = "sewa_alat";
    protected $primaryKey = "id";
    protected $fillable = [
        'penyewaan_id', 'id_alat', 'jumlah_alat'
    ];

    public function penyewaan()
    {
        return $this->belongsTo(Penyewaan::class, 'penyewaan_id');
    }

    public function alat()
    {
        return $this->belongsTo(Alat::class, 'id_alat');
    }
}
