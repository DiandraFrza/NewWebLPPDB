<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets-user/css/daftar.css') }}">
</head>

<body>
    <a href="{{ url('/') }}" class="btn-kembali">Kembali</a>
    <div class="container">
        <header>Form Pendaftaran</header>

        {{-- Menampilkan error validation jika ada --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{-- Notifikasi info upload foto dan sertifikat --}}
        <div class="notif pulse">
            <p>Upload foto dan sertifikat opsional. Ini hanya saran, tapi jika tidak diperlukan, bisa kosongkan saja!</p>
            <span class="notif-close" style="cursor: pointer;">&times;</span>
        </div>

        {{-- Formulir pendaftaran --}}
        <form class="daftar-wrapper" action="{{ route('ppdb.store') }}" method="post" enctype="multipart/form-data">
            @csrf {{-- CSRF Token Laravel --}}

            {{-- Flash message sukses --}}
            @if (session('success'))
            <div class="notif-sukses">
                {{ session('success') }}
            </div>
            @endif

            <div class="form first">
                <div class="details personal">
                    <span class="title garis-bawahk">Detail Pribadi</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nama Lengkap</label>
                            <input name="nama_lengkap" type="text" placeholder="Masukkan Nama" value="{{ old('nama_lengkap') }}" required>
                        </div>

                        <div class="input-field">
                            <label>Tanggal Lahir</label>
                            <input name="tanggal_lahir" type="date" placeholder="Masukkan Tanggal Lahir" value="{{ old('tanggal_lahir') }}" required>
                        </div>

                        <div class="input-field">
                            <label>Alamat</label>
                            <input name="alamat" type="text" placeholder="Masukkan Alamat" value="{{ old('alamat') }}" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input name="email" type="text" placeholder="Masukkan Email" value="{{ old('email') }}" required>
                        </div>

                        <div class="input-field">
                            <label>No.Telepon</label>
                            <input name="telepon" type="number" placeholder="Masukkan No.Telepon" value="{{ old('telepon') }}" required>
                        </div>

                        <div class="input-field">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" required>
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki" {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title garis-bawahk">Detail Pendaftaran</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nilai Ijazah</label>
                            <input name="nilai_ijazah" type="number" placeholder="Masukkan Nilai Ijazah" value="{{ old('nilai_ijazah') }}" required>
                        </div>

                        <div class="input-field">
                            <label>Upload Foto Kamu</label>
                            <input id="foto_siswa" name="foto_siswa" type="file">
                        </div>

                        <div class="input-field">
                            <label>Upload Sertifikat</label>
                            <input id="dokumen_pendukung" name="dokumen_pendukung" type="file">
                        </div>

                        <div class="input-field">
                            <label>Pilih Jurusan/Kejuruan</label>
                            <select name="pilihan_jurusan" required>
                                <option disabled selected>List Jurusan</option>
                                <option value="PPPLG" {{ old('pilihan_jurusan') == 'PPPLG' ? 'selected' : '' }}>PPPLG</option>
                                <option value="TKJT" {{ old('pilihan_jurusan') == 'TKJT' ? 'selected' : '' }}>TKJT</option>
                                <option value="DKV" {{ old('pilihan_jurusan') == 'DKV' ? 'selected' : '' }}>DKV</option>
                                <option value="MPLB" {{ old('pilihan_jurusan') == 'MPLB' ? 'selected' : '' }}>MPLB</option>
                                <option value="PEMASARAN" {{ old('pilihan_jurusan') == 'PEMASARAN' ? 'selected' : '' }}>PEMASARAN</option>
                            </select>
                        </div>

                        <button type="submit" class="nextBtn">
                            <span class="btnText">Send</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.querySelector(".notif-close").addEventListener("click", function() {
            document.querySelector(".notif").classList.add("hide");
        });
    </script>
</body>

</html>