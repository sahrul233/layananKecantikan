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
        Schema::create('jadwal_pelanggans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelanggans_id');
            $table->unsignedBigInteger('jadwal_admins_id');
            $table->unsignedBigInteger('karyawans_id')->nullable();
            $table->string('tempat')->nullable();
            $table->enum('status', ['pending', 'selesai', 'batal'])->default('pending');
            $table->timestamps();

            $table->foreign('pelanggans_id')->references('id')->on('pelanggans')->onDelete('cascade');
            $table->foreign('jadwal_admins_id')->references('id')->on('jadwal_admins')->onDelete('cascade');
            $table->foreign('karyawans_id')->references('id')->on('karyawans')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_pelanggans');
    }
};
