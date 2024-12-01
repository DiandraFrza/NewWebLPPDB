<?php

namespace App\Http\Controllers;

use App\Models\PpdbModel;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function showForm()
    {
        return view('ppdb.daftar');
    }

    public function store(Request $request)
    {
        // Validasi inputan
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'email' => 'required|email',
            'telepon' => 'required|numeric',
            'jenis_kelamin' => 'required|string',
            'nilai_ijazah' => 'required|numeric',
            'foto_siswa' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Tidak wajib
            'dokumen_pendukung' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // Tidak wajib
            'pilihan_jurusan' => 'required|string',
        ]);

        // Menyimpan data pendaftaran
        $ppdb = new PpdbModel();
        $ppdb->nama_lengkap = $validated['nama_lengkap'];
        $ppdb->tanggal_lahir = $validated['tanggal_lahir'];
        $ppdb->alamat = $validated['alamat'];
        $ppdb->email = $validated['email'];
        $ppdb->telepon = $validated['telepon'];
        $ppdb->jenis_kelamin = $validated['jenis_kelamin'];
        $ppdb->nilai_ijazah = $validated['nilai_ijazah'];
        $ppdb->pilihan_jurusan = $validated['pilihan_jurusan'];

        // upload foto dan dokumen
        if ($request->hasFile('foto_siswa')) {
            $ppdb->foto_siswa = $request->file('foto_siswa')->store('uploads/foto_siswa');
        }

        if ($request->hasFile('dokumen_pendukung')) {
            $ppdb->dokumen_pendukung = $request->file('dokumen_pendukung')->store('uploads/dokumen_pendukung');
        }

        // Simpan ke database
        $ppdb->save();

        // Redirect ke halaman utama dengan pesan sukses
        return redirect('/')->with('success', 'Pendaftaran berhasil!');
    }
}
