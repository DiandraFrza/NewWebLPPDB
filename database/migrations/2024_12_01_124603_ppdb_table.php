<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ppdb', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('email');
            $table->string('telepon');
            $table->string('jenis_kelamin');
            $table->integer('nilai_ijazah');
            $table->string('foto_siswa')->nullable();
            $table->string('dokumen_pendukung')->nullable();
            $table->string('pilihan_jurusan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ppdb');
    }
};
