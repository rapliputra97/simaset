<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $fillable = ['nama_ruangan', 'bangunan_id'];

    public function bangunan() {
        return $this->belongsTo(Bangunan::class);
    }

    public function barangs() {
        return $this->hasMany(Barang::class);
    }
}

