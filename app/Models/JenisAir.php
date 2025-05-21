<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisAir extends Model
{
    protected $table = 'jenis_air';
    protected $fillable = ['nama_air'];

    public function ikan()
    {
        return $this->hasMany(Ikan::class, 'jenis_air_id');
    }
}