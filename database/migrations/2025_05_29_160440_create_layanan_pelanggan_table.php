<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananPelangganTable extends Migration
{
    public function up()
    {
        Schema::create('layanan_pelanggan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelanggan_id');
            $table->unsignedBigInteger('layanan_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('layanan_pelanggan');
    }
}
