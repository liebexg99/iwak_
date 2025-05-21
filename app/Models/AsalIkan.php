<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsalIkan extends Model
{
    protected $table = 'asal_ikan';
    protected $fillable = ['nama_asal'];

    public function ikan()
    {
        return $this->hasMany(Ikan::class, 'asal_ikan_id');
    }
}