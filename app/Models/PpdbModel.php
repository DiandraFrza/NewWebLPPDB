<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpdbModel extends Model
{
    use HasFactory;

    protected $table = 'ppdb';
    protected $fillable = [
        'nama_lengkap',
        'tanggal_lahir',
        'alamat',
        'email',
        'telepon',
        'jenis_kelamin',
        'nilai_ijazah',
        'foto_siswa',
        'dokumen_pendukung',
        'pilihan_jurusan',
    ];
}
