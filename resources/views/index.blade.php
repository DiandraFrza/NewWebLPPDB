<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('boostrap/css/boostrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/style.css') }}">

</head>

<body>
    @if(session('success'))
    <div class="notif-success" id="successNotification">
        <span>{{ session('success') }}</span>
        <button class="close-btn" onclick="closeNotification()">×</button>
    </div>
    @endif
    <div class="header-container">
        <div class="logo-container">
            <img class="logocn" alt="Logo Citra Negara" src="{{ asset('assets-user/img/logocn2.png') }}" />
            <span class="text-container">
                SEKOLAH MENENGAH KEJURUAN CITRA NEGARA
            </span>
        </div>
        <div class="logos-container">
            <img alt="Logo SMK HEBAT" src="{{('assets-user/img/smkhebat.png'); }}" />
            <img alt="Logo TEKNISI GO" src="{{('assets-user/img/teknisigo.png'); }}" />
            <img alt="Logo MASAGI" src="{{('assets-user/img/masagi.png'); }}" />
            <img alt="Logo ADIWIYATA" src="{{('assets-user/img/adiwiyata.png'); }}" />
        </div>

        <!-- Burger icon -->
        <div id="menu-icon" class="menu-icon">&#9776;</div>
    </div>
    <div class="navbar-container navbar-colored">
        <a href="#home">
            Home
        </a>
        <a href="#kejuruan">
            Kejuruan
        </a>
        <a href="#ekstrakulikuler">
            Ekstrakulikuler
        </a>
        <a href="#prestasi">
            Prestasi
        </a>
        <a href="#contact">
            Contact
        </a>
    </div>
    <section id=" home">
        <div class="home-container">
            <div class="overlay"></div>
            <div class="home-text">
                <h1 class="animated">
                    Selamat Datang di SMK Citra Negara
                </h1>
                <p class="animated">
                    Sekolah Terbesar di Kota Depok dengan Segudang Prestasi
                </p>
            </div>
            <div class="home-btn">
                <button class="button-59 animated" role="button">MASUK</button>
                <a href="{{ url('/ppdb/daftar') }}">
                    <button class="button-59 animated" role="button">DAFTAR</button>
                </a>
            </div>
            <div class="stats-container">
                <div class="stat-item">
                    <img class="animated-image" src="{{('assets-user/img/gedung.png'); }}" alt="Ruang Kelas">
                    <p class="count animated" data-target="72">0</p>
                    <p class="animated">Kelas</p>
                </div>
                <div class="stat-item">
                    <img class="animated-image" src="{{('assets-user/img/siswa.png'); }}" alt="Siswa">
                    <p class="count animated" data-target="2890">0</p>
                    <p class="animated">Murid</p>
                </div>
                <div class="stat-item">
                    <img class="animated-image" src="{{('assets-user/img/guru.png'); }}" alt="Guru">
                    <p class="count animated" data-target="100">0</p>
                    <p class="animated">Guru</p>
                </div>
                <div class="stat-item">
                    <img class="animated-image" src="{{('assets-user/img/piagam.png'); }}" alt="Prestasi">
                    <p class="count animated" data-target="1000">0</p>
                    <p class="animated">Prestasi</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kejuruan" class="p-4">
        <h2 class="text-center fs-2 jurusan-text animated">List Jurusan</h2><br><br>
        <div class="jurusan-slider">
            <button class="prev" onclick="moveSlider(-1)">&#10094;</button>
            <div class="jurusan-wrapper" id="sliderContainer">
                <div class="jurusan-item">
                    <img class="animated-image" src="{{('assets-user/img/jurusan/PPLG.png'); }}" alt="PPLG">
                    <p>PPLG (Pengembangan Perangkat Lunak dan Gim)</p>
                </div>
                <div class="jurusan-item">
                    <img class="animated-image" src="{{('assets-user/img/jurusan/TKJT.png'); }}" alt="TKJT">
                    <p>TKJT (Teknik Jaringan Komputer dan Telekomunikasi)</p>
                </div>
                <div class="jurusan-item">
                    <img class="animated-image" src="{{('assets-user/img/jurusan/PEMASARAN.png'); }}" alt="Pemasaran">
                    <p>Pemasaran</p>
                </div>
                <div class="jurusan-item">
                    <img class="animated-image" src="{{('assets-user/img/jurusan/DKV.png'); }}" alt="DKV">
                    <p>DKV (Desain Komunikasi Visual)</p>
                </div>
                <div class="jurusan-item">
                    <img class="animated-image" src="{{('assets-user/img/jurusan/MPLB.png'); }}" alt="MPLB">
                    <p>MPLB (Manajemen Perkantoran dan Layanan Bisnis)</p>
                </div>
            </div>
            <button class="next" onclick="moveSlider(1)">&#10095;</button>
        </div>
    </section>

    <section id="sertifikat">
        <h2 class="text-center fs-2 sertifikat-text animated">Sertifikat</h2><br><br>
        <div class="sertifikat-container">
            <div class="sertifikat-wrapper">
                <div class="certificate">
                    <img src="{{ asset('assets-user/img/sertifikat/certif1.png') }}" alt="Akreditasi Sertifikat">
                    <div class="sertifikat-caption animated">Akreditasi Sertifikat</div>
                </div>
                <div class="certificate">
                    <img src="{{ asset('assets-user/img/sertifikat/certif2.png') }}" alt="Akreditasi Sertifikat">
                    <div class="sertifikat-caption animated">Sekolah Masagi</div>
                </div>
                <div class="certificate">
                    <img src="{{ asset('assets-user/img/sertifikat/certif3.png') }}" alt="Akreditasi Sertifikat">
                    <div class="sertifikat-caption animated">Lomba Gala Kreasi</div>
                </div>
                <div class="certificate">
                    <img src="{{ asset('assets-user/img/sertifikat/certif4.png') }}" alt="Akreditasi Sertifikat">
                    <div class="sertifikat-caption animated">Sekolah Adiwiyata</div>
                </div>
            </div>
        </div>
    </section>

    <section id="ekstrakulikuler">
        <header class="bg-yellow py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-black">
                    <h1 class="display-4 fw-bolder animated">EKSTRAKULIKULER</h1>
                    <p class="lead fw-normal text-black-50 mb-0 animated">Daftarkan diri Anda Sekarang Juga!</p>
                </div>
            </div>
        </header>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">HOTS</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="{{('assets-user/img/eskul/IMG-20241031-WA0000.jpg'); }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder animated">BAND</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{('assets-user/img/eskul/IMG-20241031-WA0001.jpg'); }}" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder animated">FUTSAL</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{('assets-user/img/eskul/IMG-20241031-WA0002.jpg'); }}" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder animated">VOLI</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{('assets-user/img/eskul/IMG-20241031-WA0003.jpg'); }}" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder animated">PASKIBRA</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{('assets-user/img/eskul/IMG-20241031-WA0004.jpg'); }}" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder">PRAMUKA</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{('assets-user/img/eskul/IMG-20241031-WA0005.jpg'); }}" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder">ESPORT FREE FIRE</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{('assets-user/img/eskul/IMG-20241031-WA0006.jpg'); }}" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder animated">BASKET</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{('assets-user/img/eskul/IMG-20241031-WA0007.jpg'); }}" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder animated">IRMA</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{('assets-user/img/eskul/IMG-20241031-WA0008.jpg'); }}" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder animated">CITER</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{('assets-user/img/eskul/IMG-20241031-WA0009.jpg'); }}" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h6 class="fw-bolder animated">TAEKWONDO</h6>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="prestasi" class="pt-4">
        <h2 class="text-center fs-2 prestasi-text animated">Prestasi Non Akademik</h2><br><br>
        <div class="prestasi-wrapper">
            <button class="nav-button left">&#8249;</button>
            <div class="gallery">
                <figure class="card-prestasi">
                    <img src="{{('assets-user/img/prestasi/band.jpg'); }}" alt="JUARA BAND">
                </figure>
                <figure class="card-prestasi">
                    <img src="{{('assets-user/img/prestasi/dancer.jpg'); }}" alt="JUARA DANCE">
                </figure>
                <figure class="card-prestasi">
                    <img src="{{('assets-user/img/prestasi/ff.jpg'); }}" alt="JUARA FREEFIRE">
                </figure>
                <figure class="card-prestasi">
                    <img src="{{('assets-user/img/prestasi/futsal.jpg'); }}" alt="JUARA FUTSAL">
                </figure>
                <figure class="card-prestasi">
                    <img src="{{('assets-user/img/prestasi/futsal1.jpg'); }}" alt="JUARA FUTSAL">
                </figure>
                <figure class="card-prestasi">
                    <img src="{{('assets-user/img/prestasi/guitar.jpg'); }}" alt="JUARA GITAR">
                </figure>
                <figure class="card-prestasi">
                    <img src="{{('assets-user/img/prestasi/paskibra.jpg'); }}" alt="JUARA PASKIBRA">
                </figure>
                <figure class="card-prestasi">
                    <img src="{{('assets-user/img/prestasi/puisi.jpg'); }}" alt="JUARA PUISI">
                </figure>
                <figure class="card-prestasi">
                    <img src="{{('assets-user/img/prestasi/taekwondo.jpg'); }}" alt="JUARA TAEKWONDO">
                </figure>
                <figure class="card-prestasi">
                    <img src="{{('assets-user/img/prestasi/taekwondo1.jpg'); }}" alt="JUARA TAEKWONDO">
                </figure>
                <figure class="card-prestasi">
                    <img src="{{('assets-user/img/prestasi/volly.jpg'); }}" alt="JUARA VOLLY">
                </figure>
            </div>
            <button class="nav-button right">&#8250;</button>
        </div>
    </section>

    <div id="overlay-sertifikat" onclick="closeOverlay()">
        <img id="full-img" src="" alt="Full Certificate">
        <button id="close-btn" onclick="closeOverlay()">X</button>
    </div>

    <section id="contact">
        <h2 class="text-center fs-2 prestasi-text animated">Contact</h2><br><br>
        <div class="feedback-card">
            <div class="feedback-header animated">
                SEND FEEDBACK
            </div>
            <form class="feedback-body">
                <input type="email" class="feedback-body__email" placeholder="Email" />
                <textarea type="text" class="feedback-body__message" placeholder="Message"></textarea>
                <!-- Tombol untuk membuka map -->
                <button class="feedback-body__submit">SEND</button>
            </form>
        </div>
    </section>

    <div class="map-container" id="mapContainer" onclick="toggleFullscreen()">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.419338529648!2d106.8096617!3d-6.3804675!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eeacc6e549ab%3A0xd6c5c8ece644d8ee!2sSekolah%20Menengah%20Kejuruan%20Citra%20Negara!5e0!3m2!1sid!2sid!4v1728786042559!5m2!1sid!2sid"
            loading="lazy">
        </iframe>
    </div>

</body>
<footer class="py-5 footer-wrapper">
    <div class="container">
        <p class="m-0 text-center text-white animated">Copyright &copy; @Diandrfrzaa_</p>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{('assets-user/js/script.js'); }}"></script>
<script src="{{('boostrap/js/boostrap.min.js'); }}"></script>
<script>
    function showNotification() {
        document.getElementById('notification-popup').style.display = 'block'; // Menampilkan popup
    }

    // Menutup popup notifikasi
    function closeNotification() {
        document.getElementById('notification-popup').style.display = 'none'; // Menyembunyikan popup
    }

    // Menampilkan popup saat halaman dimuat
    window.addEventListener('load', function() {
        showNotification(); // Menampilkan popup saat halaman selesai dimuat
    });

    // Mendapatkan semua elemen gambar dan elemen dengan kelas 'animated'
    const images = document.querySelectorAll('.animated-image');
    const elements = document.querySelectorAll('.animated');

    // Membuat observer untuk mendeteksi apakah elemen masuk atau keluar dari viewport
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (!entry.target.classList.contains('active')) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target); // Menghentikan pengamatan setelah animasi
                }
            } else {
                // Menghapus kelas 'active' saat gambar keluar viewport jika perlu
                entry.target.classList.remove('active');
            }
        });
    }, {
        threshold: 0.5 // Gambar dianggap "masuk" jika setidaknya 50% terlihat
    });

    // Mengamati semua elemen yang ingin dianimasikan (gambar dan elemen dengan kelas .animated)
    [...images, ...elements].forEach(element => {
        observer.observe(element);
    });

    function toggleFullscreen() {
        const mapContainer = document.getElementById('mapContainer');
        mapContainer.classList.toggle('fullscreen');
    }

    function increaseNumberAnimation() {
        const counters = document.querySelectorAll('.count');

        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const currentCount = +counter.innerText;
                const increment = target / 50; // Atur pembagian supaya kecepatannya sesuai

                if (currentCount < target) {
                    counter.innerText = Math.ceil(currentCount + increment);
                    setTimeout(updateCount, 50); // Kecepatan animasi, bisa disesuaikan
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        });
    }


    // Memulai animasi saat halaman dimuat
    document.addEventListener("DOMContentLoaded", increaseNumberAnimation);

    // Animasi notifikasi
    document.addEventListener("DOMContentLoaded", function() {
        const notif = document.getElementById("successNotification");
        if (notif) {
            notif.classList.add("show");
            setTimeout(() => notif.classList.remove("show"), 30000); // Auto-hide setelah 30 detik
        }
    });

    // Tutup notifikasi manual
    function closeNotification() {
        document.getElementById("successNotification").style.display = "none";
    }

    const gallery = document.querySelector('.gallery');
    const leftButton = document.querySelector('.nav-button.left');
    const rightButton = document.querySelector('.nav-button.right');

    // Geser galeri ke kiri
    leftButton.addEventListener('click', () => {
        gallery.scrollBy({
            left: -200,
            behavior: 'smooth'
        });
    });

    // Geser galeri ke kanan
    rightButton.addEventListener('click', () => {
        gallery.scrollBy({
            left: 200,
            behavior: 'smooth'
        });
    });

    // Menambahkan event listener pada scroll
    window.addEventListener('scroll', function() {
        const elements = document.querySelectorAll('.scroll-animate');

        // Loop untuk cek setiap elemen
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top; // Dapatkan posisi elemen relatif ke layar
            const screenPosition = window.innerHeight / 1.2; // Tentukan kapan animasi mulai (misalnya 20% dari layar)

            if (elementPosition < screenPosition) {
                element.classList.add('active'); // Tambahkan class active saat elemen muncul
            }
        });
    });
</script>

</html>