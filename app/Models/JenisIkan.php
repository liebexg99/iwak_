<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisIkan extends Model
{
    protected $table = 'jenis_ikan';
    protected $fillable = ['nama_jenis'];

    public function ikan()
    {
        return $this->hasMany(Ikan::class, 'jenis_ikan_id');
    }
}