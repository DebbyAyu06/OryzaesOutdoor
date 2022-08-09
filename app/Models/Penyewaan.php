<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    protected $table = "penyewaan";
    protected $primaryKey = "id";
    protected $fillable = [
        'jmlh_alat', 'tgl_sewa', 'tgl_kmbl', 'total_byr', 'status', 'id_alat', 'id_penyewa', 'id_diskon',
    ];

    public function alat()
    {
        return $this->belongsTo(Alat::class, 'id_alat');
    }

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'id_penyewa');
    }

    public function diskon()
    {
        return $this->belongsTo(Diskon::class, 'id_diskon');
    }

    public function sewa()
    {
        return $this->hasMany(Sewaalat::class, 'penyewaan_id');
    }
}
