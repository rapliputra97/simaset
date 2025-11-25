<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $fillable = [
        'bangunan_id',
        'nama_ruangan',
        'kode_ruangan',
        'jenis_ruangan',
        'luas',
    ];

    public function bangunan()
    {
        return $this->belongsTo(Bangunan::class);
    }
}
