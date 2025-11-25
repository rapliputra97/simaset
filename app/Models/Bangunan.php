<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bangunan extends Model
{
    protected $fillable = [

        'nama_bangunan',
        'kode_bangunan',    
        'tanah_id',
    ];
   
    public function tanah()
    {
       return $this->belongsTo(Tanah::class);
    }
}
