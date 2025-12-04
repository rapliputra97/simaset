<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tanah extends Model
{
    protected $fillable = [
    'nama_tanah',
    'alamat',
    'luas',
    'status',
    'kode_tanah',
    'no_sertifikat'
];



    public function bangunan()
    {
        return $this->hasMany(Bangunan::class);
    }
}
