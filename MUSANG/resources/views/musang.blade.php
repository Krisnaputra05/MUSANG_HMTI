<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - MUSANG HMTI 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="{{ asset('css/cardslider.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rekam.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cp.css') }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <span><img src="gambar/LOGO MUSANG 2024 rz.png" alt="Logo Musang" class="lm"></span>
            <ul class="nav-links">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#rekamjejak">Rekam Jejak</a></li>
                <li><a href="#about-content">Tentang</a></li>
                <li><a href="#contactperson">Contact Person</a></li>
                <li><button class="btn login-btn" id="loginBtn">Login</button></li>
                <li><button class="btn register-btn" id="registerBtn">Register</button></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Beranda Section -->
        <section class="landing" id="beranda">
            <div class="content">
                <h1>APA ITU MUSANG HMTI 2024?</h1>
                <p>
                    Musang HMTI atau Musyawarah Anggota Himpunan Mahasiswa Teknologi adalah kegiatan musyawarah yang rutin
                    dilaksanakan setiap akhir tahun untuk evaluasi fungsionaris HMTI sebelumnya dan pemilihan ketua HMTI.
                </p>
            </div>
            <div class="slider">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img src="gambar/musang.JPG" class="d-inline-block w-100 rounded" alt="..."></div>
                        <div class="carousel-item"><img src="gambar/pemira.JPG" class="d-inline-block w-100 rounded" alt="..."></div>
                        <div class="carousel-item"><img src="gambar/pramusang.JPG" class="d-inline-block w-100 rounded" alt="..."></div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Rangkaian Kegiatan Section -->
        <section class="rangkaian-kegiatan">
            <div class="title"><h1>RANGKAIAN KEGIATAN</h1></div>
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <!-- Card Example -->
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <div class="card-image"><img src="img/rapatangkatan.JPG" alt="Rapat Angkatan" class="card-img"></div>
                                <div class="card-content">
                                    <h2 class="kegiatan">RAPAT ANGKATAN</h2>
                                    <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    <button class="btn-more">Lebih Lengkap</button>
                                </div>
                            </div>
                        </div>
                        <!-- Additional Cards Go Here -->
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- Tentang Section -->
        <section class="about-content" id="about-content">
            <div class="about-logo"><img src="/gambar/LOGO MUSANG 2024 rz.png" alt="Logo Musang" class="logo-img"></div>
            <div class="about-text">
                <h2>TENTANG MUSANG</h2>
                <hr class="line">
                <p><strong>Musyawarah Anggota</strong> atau "MUSANG" adalah kegiatan musyawarah tahunan untuk evaluasi HMTI dan pemilihan ketua baru.</p>
            </div>
        </section>

        <!-- Rekam Jejak Section -->
        <section id="rekamjejak" class="rekam-jejak">
            <h1>REKAM JEJAK KANDIDAT</h1>
            <div class="rekam-jejak-container">
                <!-- Candidate Card Example -->
                <div class="card-rekam-jejak">
                    <h1 class="class-kandidat">Krisna</h1>
                    <img src="gambar/calon1.JPG" alt="Foto Calon 1">
                    <p><strong>Organisasi:</strong> Anggota Fungsionaris HMTI 2024</p>
                    <div id="moreInfo1" class="more-info" style="display:none;">
                        <p>Ketua Panitia Musang HMTI 2024</p>
                    </div>
                    <p><strong>Prestasi:</strong> Finalis Lomba ITCC HMTI 2023</p>
                    <div class="button-div">
                        <button onclick="toggleMoreInfo('moreInfo1')" class="more-info-btn">More Info</button>
                    </div>
                </div>
                <!-- Additional Candidate Cards Go Here -->
            </div>
        </section>

        <!-- Contact Person Section -->
        <section id="contactperson" class="contact-person">
            <h1>CONTACT <span class="highlight">PERSON</span></h1>
            <p class="description">Jika Anda memiliki pertanyaan, hubungi narahubung di bawah ini.</p>
            <div class="contact-cards">
                <div class="contact-card">
                    <h3>Danen</h3>
                    <p>WA: 0813348xxx</p>
                    <p>LINE: danen</p>
                </div>
                <!-- Additional Contacts Go Here -->
            </div>
            <div class="illustration"><img src="/gambar/contact person.png" alt="Customer Service Illustration"></div>
        </section>
    </main>

    <button class="btn-home" onclick="document.getElementById('beranda').scrollIntoView({ behavior: 'smooth' })">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
            <line x1="12" y1="19" x2="12" y2="5" />
            <polyline points="5 12 12 5 19 12" />
        </svg>
    </button>

    <!-- JavaScript Section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
            spaceBetween: 35,
            loop: true,
            pagination: { el: ".swiper-pagination", clickable: true },
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        });

        function toggleMoreInfo(id) {
            var moreInfo = document.getElementById(id);
            moreInfo.style.display = moreInfo.style.display === "none" ? "block" : "none";
        }
    </script>
</body>
</html>
