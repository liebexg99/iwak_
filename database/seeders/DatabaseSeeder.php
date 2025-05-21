<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisIkan;
use App\Models\JenisAir;
use App\Models\AsalIkan;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        JenisIkan::create(['nama_jenis' => 'ikanpendek']);
        JenisIkan::create(['nama_jenis' => 'ikanpanjang']);
        JenisAir::create(['nama_air' => 'sungainil']);
        JenisAir::create(['nama_air' => 'airdingin']);
        AsalIkan::create(['nama_asal' => 'Indonesia']);
        AsalIkan::create(['nama_asal' => 'Thailand']);
    }
}