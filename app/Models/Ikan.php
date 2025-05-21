<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ikan extends Model
{
    protected $table = 'ikan';
    protected $fillable = ['nama_ikan', 'jenis_ikan_id', 'jenis_air_id', 'asal_ikan_id', 'stok', 'harga'];

    public function jenisIkan()
    {
        return $this->belongsTo(JenisIkan::class, 'jenis_ikan_id');
    }

    public function jenisAir()
    {
        return $this->belongsTo(JenisAir::class, 'jenis_air_id');
    }

    public function asalIkan()
    {
        return $this->belongsTo(AsalIkan::class, 'asal_ikan_id');
    }
}