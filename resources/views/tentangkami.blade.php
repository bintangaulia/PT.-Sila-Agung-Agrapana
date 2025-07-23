<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PT. Sila Agung Agrapana</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/Sila Agug Agrapana.jpg" rel="icon">
    <link href="assets/img/favicon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="starter-page-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Sila Agung Agrapana</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('konstruksi') }}">Kontruksi</a></li>
                    <li><a href="{{ route('pricelist') }}">Pricelist</a></li>
                    <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('outher-project') }}">Other Project</a></li>

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 60%, rgba(0, 0, 0, 0.8) 100%),url(assets/img/page-title-bg.webp); ">
            <div class="container position-relative">
                <h1 style="font-size:70px;">PT. Sila Agung Agrapana</h1>
                <nav class="breadcrumbs">

                    {{-- <ol>
                        <li><a href={{ url('/kontraktor') }} target="_blank">Home</a></li>
                        <li class="current">Starter Page</li>
                    </ol> --}}
                </nav>
            </div>
        </div><!-- End Page Title -->


        <!-- Start content -->
        <div class="container" data-aos="fade-up" style="margin-top: 40px; margin-bottom: 40px;">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="fw-bold mb-2" style="font-size:2.8rem;">Tentang PT. Sila Agung Agrapana</h2>
                    <h5 class="mb-4" style="color:#ccc; font-weight:400;">Jasa konstruksi dan Arsitektur</h5>
                    <p class="fst-italic mb-4" style="color:#ccc; font-weight:bold;">
                        <b>Berfokus pada kualitas, ketepatan waktu, dan kepuasan pelanggan, PT. Sila Agung Agrapana
                            menawarkan solusi konstruksi yang inovatif dan sesuai dengan standar terkini.</b>
                    </p>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <p>
                                PT. Sila Agung Agrapana adalah perusahaan yang bergerak di bidang jasa konstruksi,
                                design & build, desain arsitektur, interior, serta pengurusan perizinan dan renovasi.
                                Berbasis di Jakarta Timur, kami berkomitmen untuk memberikan layanan profesional dan
                                hasil berkualitas tinggi untuk setiap proyek.
                            </p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <p>
                                Kami percaya bahwa setiap ruang harus memiliki nilai tinggi, fungsi yang optimal, dan
                                estetika yang indah. Dengan tim yang ahli dan berpengalaman, kami menghadirkan solusi
                                yang menyeluruh, mulai dari perencanaan hingga pelaksanaan, demi kepuasan maksimal
                                klien.
                            </p>
                        </div>
                    </div>
                    <p class="mt-4 fst-italic" style="color:#888;">
                        <b>Developed by <span style="color:#ff6f00;">Sila Agung Agrapana</span> Digital&copy; 2025.</b>
                    </p>
                </div>
            </div>
        </div>
        <!-- End content -->

        <!--start portfolio-->
        <!-- Section: Membangun Dengan Mudah -->
        <div class="container-fluid py-5" style="background:#181818;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Kiri: Konten dan Icon -->
                    <div class="col-lg-7 mb-4 mb-lg-0">
                        <h2 class="fw-bold text-white text-center text-lg-start" style="font-size:2.5rem;">MEMBANGUN
                            DENGAN MUDAH !</h2>
                        <h4 class="text-white mb-4 text-center text-lg-start" style="font-weight:400;">WUJUDKAN IMPIAN
                            BERSAMA ANDALUSIA</h4>
                        <div class="row mt-4">
                            <div class="col-6 d-flex mb-4">
                                <img src="assets/img/icon/ruler.png" alt="" style="width:40px;height:40px;"
                                    class="me-3">
                                <div>
                                    <div class="fw-bold text-white">PERENCANAAN</div>
                                    <div class="text-white-50">Rencanakan hunian impian.</div>
                                </div>
                            </div>
                            <div class="col-6 d-flex mb-4">
                                <img src="assets/img/icon/partner.png" alt="" style="width:40px;height:40px;"
                                    class="me-3">
                                <div>
                                    <div class="fw-bold text-white">KESEPAKATAN</div>
                                    <div class="text-white-50">Sesuai dengan anggaran atau keinginan.</div>
                                </div>
                            </div>
                            <div class="col-6 d-flex">
                                <img src="assets/img/icon/paint.png" alt="" style="width:40px;height:40px;"
                                    class="me-3">
                                <div>
                                    <div class="fw-bold text-white">3D DESIGN</div>
                                    <div class="text-white-50">Desain sesuai keinginan anda.</div>
                                </div>
                            </div>
                            <div class="col-6 d-flex">
                                <img src="assets/img/icon/tools.png" alt="" style="width:40px;height:40px;"
                                    class="me-3">
                                <div>
                                    <div class="fw-bold text-white">PENGERJAAN</div>
                                    <div class="text-white-50">Proses pengerjaan sesuai harapan.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Kanan: Gambar -->
                    <div class="col-lg-5 d-flex justify-content-center">
                        <div class="d-flex flex-column flex-lg-row gap-3">
                            <img src="assets/img/icon/fav1.jpg" alt="" class="img-fluid rounded"
                                style="max-width:250px;">
                            <img src="assets/img/icon/fav2.jpg" alt="" class="img-fluid rounded"
                                style="max-width:250px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Starter Section -->
        <section id="starter-section" class="starter-section section">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4 align-items-center">
                    <!-- Kolom kiri: content text -->
                    <div class="col-lg-6">
                        <h3 style="font-weight:bold;">Kenapa Memilih PT. Sila Agung Agrapana?</h3><br>
                        <p style="font-size: 1.1rem;">
                            Kami adalah solusi terbaik untuk kebutuhan konstruksi dan arsitektur Anda.<br>
                            Berpengalaman, profesional, dan mengutamakan kepuasan pelanggan.
                        </p>
                    </div>
                    <!-- Kolom kanan: tombol dan deskripsi -->
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="d-flex align-items-center">
                            <a href="https://wa.me/6285649838098?text=Halo%2C%20saya%20ingin%20menghubungi%20Sila%20Agung%20Agrapana%20terkait%20jasa%20konstruksi."
                                class="btn btn-color-primary btn-style-default btn-style-round btn-size-large wd-open-popup me-3"
                                style="background-color: #ffcc53; min-width: 160px; font-weight: 500;">
                                Hubungi Kami
                            </a>
                            <div>
                                <h4 class="mb-1" style="font-size: 1.8rem; font-weight:bold;">No. Telepon</h4>
                                <p href="https://wa.me/6285649838098?text=Halo%2C%20saya%20ingin%20menghubungi%20Sila%20Agung%20Agrapana%20terkait%20jasa%20konstruksi."
                                    class="mb-0" style="font-size: 1.5rem;">+62 856 498 380 98 (admin)<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Starter Section -->

    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container">
            <div class="container">
                </main>
                <footer id="footer" class="footer dark-background"
                    style="margin-top:60px; padding-top:20px; padding-bottom:10px;">
                    <div class="container" style="max-width: 900px;">
                        <div class="copyright text-center" style="font-size: 15px;">
                            <span>Perusahaan</span> <strong class="px-1 sitename">PT Sila Agung Agrapana</strong>
                            <span>2025</span>
                        </div>
                        <div class="credits text-center" style="font-size: 13px;">
                            Jasa : <a href="#hero">Kontuksi Dan Arsitektur</a>
                        </div>
                    </div>
                </footer>

                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->

                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
