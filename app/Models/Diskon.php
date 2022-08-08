<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    protected $table = 'diskon';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nm_diskon', 'ttl_diskon',
    ];

    public function penyewaan()
    {
        return $this->hasMany(Penyewaan::class);
    }
}
