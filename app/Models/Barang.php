<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'nama_barang',
        'kode_inventaris',
        'kategori_id',
        'ruangan_id',
        'tahun_pengadaan',
        'sumber_dana',
        'kondisi',
    ];

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
