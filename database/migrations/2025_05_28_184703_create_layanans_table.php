<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_layanan');
            $table->string('kategori');
            $table->string('durasi');
            $table->decimal('harga', 10, 2);
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};
