<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('no_hp', 20);
            $table->string('email')->unique();
            $table->text('alamat')->nullable();
            $table->unsignedTinyInteger('umur');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->foreignId('karyawan_id')->constrained('karyawans')->onDelete('cascade');
            $table->enum('tempat', ['Rumah', 'Salon']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
