<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ikan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ikan');
            $table->foreignId('jenis_ikan_id')->constrained('jenis_ikan')->onDelete('cascade');
            $table->foreignId('jenis_air_id')->constrained('jenis_air')->onDelete('cascade');
            $table->foreignId('asal_ikan_id')->constrained('asal_ikan')->onDelete('cascade');
            $table->integer('stok');
            $table->decimal('harga', 8, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ikan');
    }
};