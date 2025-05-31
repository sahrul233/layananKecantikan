<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_pelanggan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelanggan_id');
            $table->unsignedBigInteger('jadwal_admin_id');
            $table->unsignedBigInteger('karyawan_id')->nullable();
            $table->string('tempat')->nullable();
            $table->enum('status', ['pending', 'selesai', 'batal'])->default('pending');
            $table->timestamps();

            $table->foreign('pelanggan_id')->references('id')->on('pelanggan')->onDelete('cascade');
            $table->foreign('jadwal_admin_id')->references('id')->on('jadwal_admin')->onDelete('cascade');
            $table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_pelanggan');
    }
};
