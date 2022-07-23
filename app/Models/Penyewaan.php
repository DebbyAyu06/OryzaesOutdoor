<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    protected $table = "penyewaan";
    protected $primaryKey = "id";
    protected $fillable = [
        'jmlh_alat', 'tgl_sewa', 'tgl_kmbl', 'total_byr', 'status', 'id_alat'
    ];

    public function alat()
    {
        return $this->belongsTo(Alat::class, 'id_alat');
    }
}