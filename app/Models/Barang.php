<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama_barang', 'kode_barang', 'kategori_id', 'ruangan_id', 'jumlah'];

    public function kategori() {
        return $this->belongsTo(Kategori::class);
    }

    public function ruangan() {
        return $this->belongsTo(Ruangan::class);
    }
}

